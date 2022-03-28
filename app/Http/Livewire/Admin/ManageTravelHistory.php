<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Quarantine;
use App\Models\TravelHistory;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class ManageTravelHistory extends Component
{
    use WithPagination, Actions;
    public $set_id;
    public $quarantine_id;
    public $quarantineDetails;
    public $action = 'showList';
    public $place;
    public $date_start;
    public $date_end;
    public $number_of_days;

    public $new_place;
    public $new_date_start;
    public $new_date_end;
    public $new_number_of_days;

    public $visit_places=[];
    public $place_or_stablishment;
    public function mount($quarantine_id)
    {
        $this->quarantine_id=$quarantine_id;
        $this->quarantineDetails=Quarantine::where('id',$quarantine_id)->with('patient')->first();
    }
    public function showList()
    {
        $this->action = 'showList';
        $this->set_id=null;
    }
    public function render()
    {
        return view('livewire.admin.manage-travel-history',[
            'travelHistories'=>TravelHistory::where('quarantine_id',$this->quarantine_id)->withCount('visits')->get(),
        ])
                ->layout('layouts.admin');
    }
    public function getTravelHistoryProperty()
    {
        return TravelHistory::where('id',$this->set_id)->with('visits')->first();
    }

    public function saveTravelHistory()
    {
        $this->validate([
            'place'=>'required',
            'date_start'=>'nullable',
            'date_end'=>'nullable',
            'number_of_days'=>'nullable',
        ]);


        TravelHistory::create([
            'quarantine_id'=>$this->quarantine_id,
            'place'=>$this->place,
            'date_start'=>$this->date_start,
            'date_end'=>$this->date_end,
            'number_of_days'=>$this->number_of_days,
        ]);

        $this->reset([
            'place',
            'date_start',
            'date_end',
            'number_of_days',
        ]);
        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Travel History has been added successfully!',
            'icon'=>'success',
        ]);
        $this->action='showList';

       
       
    }
    public function editTravelHistory($id)
    {
        $this->set_id=$id;
        $this->new_place=$this->travelHistory->place;
        $this->new_date_start=$this->travelHistory->date_start;
        $this->new_date_end=$this->travelHistory->date_end;
        $this->new_number_of_days=$this->travelHistory->number_of_days;
        $this->action='edit';
    }
    public function sessionRemove()
    {
        session()->forget('message');
    }

    public function updateTravelHistory()
    {
        $this->validate([
            'new_place'=>'required',
            'new_date_start'=>'nullable',
            'new_date_end'=>'nullable',
            'new_number_of_days'=>'nullable',
        ]);

        $this->travelHistory->update([
            'place'=>$this->new_place,
            'date_start'=>$this->new_date_start,
            'date_end'=>$this->new_date_end,
            'number_of_days'=>$this->new_number_of_days,
        ]);

        $this->reset([
            'new_place',
            'new_date_start',
            'new_date_end',
            'new_number_of_days',
        ]);

        $this->showList();

        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Travel History has been updated successfully!',
            'icon'=>'success',
        ]);

    }

    public function deleteConfirmation($id)
    {
        $this->set_id=$id;
          $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'You are about to delete this Travel History!',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, delete it',
                'method' => 'delete',
            ],
            'reject' => [
                'label'  => 'No, cancel',
            ],
        ]);
    }

    public function delete()
    {
        $this->travelHistory->delete();
        $this->showList();
        
        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Travel History has been deleted successfully!',
            'icon'=>'success',
        ]);
    }

    public function addRecord($id)
    {
        $this->set_id=$id;
        $this->action='addRecord';
    }
    public function addVisitedPlace()
    {
        $this->validate([
            'place_or_stablishment'=>'required',
        ]);
        $this->visit_places[]=$this->place_or_stablishment;
        $this->place_or_stablishment='';
    }
    public function removeVisitedPlace($index)
    {
        unset($this->visit_places[$index]);
    }

    public function saveVisitedPlace()
    {
        if (count($this->visit_places)>0) {
            foreach ($this->visit_places as $place) {
                $this->travelHistory->visits()->create([
                    'place_or_stablishment'=>$place,
                ]);
            }

            $this->reset([
                'visit_places',
                'place_or_stablishment',
            ]);

            $this->showList();

            $this->notification()->notify([
                'title'=>'Success!',
                'description'=>'Visited Place has been added successfully!',
                'icon'=>'success',
            ]);
        }
    }
    
    public function viewDetails($id)
    {
        $this->set_id=$id;
        $this->action='viewDetails';
    }

}