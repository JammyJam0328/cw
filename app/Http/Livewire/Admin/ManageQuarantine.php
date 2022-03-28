<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Quarantine;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class ManageQuarantine extends Component
{
    use WithPagination, Actions;
    public $action='showList';
    public $set_id;
    public $patient_id;

    // create properties
    public $facility_id;
    public $start_date;
    public $end_date;
    public $initial_status='undifined';
    public $initial_symptoms;
    // end create properties
    public $new_facility_id;
    public $new_start_date;
    public $new_end_date;
    public $new_initial_status;
    public $new_initial_symptoms;
    public function mount($patient_id)
    {
        $this->patient_id=$patient_id;
    }
    public function getPatientProperty()
    {
        return Patient::where('id',$this->patient_id)->first();
    }
    public function getQuarantinePatientProperty()
    {
        return Quarantine::where('patient_id',$this->set_id)->first();
    }

    public function getQuarantineProperty()
    {
        return Quarantine::where('id',$this->set_id)->with(['facility'])->first();
    }

    public function checkIfNotDischarged()
    {
        // get latest quarantine of patient
        $quarantine=Quarantine::where('patient_id',$this->patient_id)->orderBy('created_at','desc')->first();
        if($quarantine->discharged==0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function render()
    {
        return view('livewire.admin.manage-quarantine',[
            'quarantines'=>Quarantine::where('patient_id',$this->patient_id)->latest()->paginate(10)
        ])
                ->layout('layouts.admin');
    }

    public function showList()
    {
        $this->action='showList';
    }

    public function create()
    {
        $this->validate([
            'facility_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'nullable',
            'initial_status'=>'required',
            'initial_symptoms'=>'nullable',
        ]);

        Quarantine::create([
            'patient_id'=>$this->patient_id,
            'facility_id'=>$this->facility_id,
            'start_date'=>$this->start_date,
            'end_date'=>$this->end_date,
            'initial_status'=>$this->initial_status,
            'initial_symptoms'=>$this->initial_symptoms,
        ]);

        $this->reset([
            'facility_id',
            'start_date',
            'end_date',
            'initial_status',
            'initial_symptoms',
        ]);

        $this->action='showList';

       $this->notification()->notify([
              'title'=>'Created!',
              'description'=>'Quarantine has been created!',
              'icon'=>'success',
       ]);
    }

    public function sessionRemove()
    {
        session()->forget('message');
    }

    public function editQuarantine($id)
    {
        $this->set_id=$id;
        $this->new_facility_id=$this->quarantine->facility_id;
        $this->new_start_date=$this->quarantine->start_date;
        $this->new_end_date=$this->quarantine->end_date;
        $this->new_initial_status=$this->quarantine->initial_status;
        $this->new_initial_symptoms=$this->quarantine->initial_symptoms;
        $this->action='edit';
    }
    public function updateQuarantine()
    {
        $this->validate([
            'new_facility_id'=>'required',
            'new_start_date'=>'required',
            'new_end_date'=>'nullable',
            'new_initial_status'=>'required',
            'new_initial_symptoms'=>'nullable',
        ]);

        $this->quarantine->update([
            'facility_id'=>$this->new_facility_id,
            'start_date'=>$this->new_start_date,
            'end_date'=>$this->new_end_date,
            'initial_status'=>$this->new_initial_status,
            'initial_symptoms'=>$this->new_initial_symptoms,
        ]);

        $this->reset([
            'new_facility_id',
            'new_start_date',
            'new_end_date',
            'new_initial_status',
            'new_initial_symptoms',
        ]);

        $this->showList();
        $this->notification()->notify([
            'title'=>'Updated!',
            'description'=>'Quarantine has been updated!',
            'icon'=>'success',
        ]);
    }

    public function deleteConfirmation($id)
    {
        $this->set_id=$id;
         $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'You are about to delete this Quarantine?',
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
        $this->quarantine->delete();
        $this->showList();
        $this->notification()->notify([
            'title'=>'Deleted!',
            'description'=>'Quarantine has been deleted!',
            'icon'=>'success',
        ]);
    }

    public function viewDetails($id)
    {
        $this->set_id=$id;
        $this->action='view-details';
    }

    public function cofirmDischarged()
    {
        $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'You are about to discharge this patient',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, discharge it',
                'method' => 'discharge',
            ],
            'reject' => [
                 'label'  => 'No, cancel',
            ],
        ]);
    }

    public function discharge()
    {
        $this->quarantine->update([
            'discharged'=>true,
        ]);
        $this->showList();
        $this->notification()->notify([
            'title'=>'Discharged!',
            'description'=>'Quarantine has been discharged!',
            'icon'=>'success',
        ]);
    }
    
}