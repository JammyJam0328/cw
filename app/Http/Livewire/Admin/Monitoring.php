<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Patient;
use App\Models\Quarantine;
use App\Models\Monitoring as MonitoringModel;
use App\Models\Finding;
use livewire\WithPagination;
use WireUi\Traits\Actions;
class Monitoring extends Component
{
    use WithPagination, Actions;
    public $action='showList';
    public $set_id;
    

    public  $day_no='1';
    public  $date;
    public  $status="undifined";
    public $selected_symptoms=[];
    public $other_symptoms;
    public $quarantine_id;

    protected $validationAttributes=[
        'day_no'=>'Day',
    ];

    public function getQuarantineProperty()
    {
        return Quarantine::where('id',$this->quarantine_id)->first();
    }
    public function getMonitoringProperty()
    {
        return MonitoringModel::where('id',$this->set_id)->first();
    }
    public function mount($quarantine_id)
    {
        $this->quarantine_id=$quarantine_id;
    }  

    public function showList()
    {
        $this->action='showList';
        $this->set_id=null;
    }
    public function render()
    {
        return view('livewire.admin.monitoring',[
            'monitorings'=>MonitoringModel::where('quarantine_id',$this->quarantine_id)->get(),
        ])
                ->layout('layouts.admin');
    }

    public function selectSymptoms($id)
    {
        if(in_array($id,$this->selected_symptoms)){
            $this->selected_symptoms=array_diff($this->selected_symptoms,[$id]);
        }else{
            $this->selected_symptoms[]=$id;
        }
    }

    public function save()
    {
        $this->validate([
            'day_no'=>'required',
            'date'=>'required',
            'status'=>'required',
            'other_symptoms'=>'nullable',
        ]);

        $monitoring = $this->quarantine->monitorings()->create([
            'day_no'=>$this->day_no,
            'date'=>$this->date,
            'status_update'=>$this->status,
            'other_symptom'=>$this->other_symptoms,
        ]);

        if(!empty($this->selected_symptoms)){
            foreach($this->selected_symptoms as $symptom){
                $monitoring->findings()->create([
                    'symptom_id'=>$symptom,
                   
                ]);
            }
        }
        $this->reset([
            'day_no',
            'date',
            'status',
            'selected_symptoms',
            'other_symptoms',
        ]);

        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Monitoring saved successfully',
            'icon'=>'success',
        ]);
        $this->showList();
    }

   

    public function viewDetails($id)
    {
        $this->set_id=$id;
        $this->action='viewDetails';
    }

    public function deleteConfirmation($id)
    {
        $this->set_id=$id;
          $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'You are about to delete this monitoring record',
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
        $this->monitoring->delete();
        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Monitoring deleted successfully',
            'icon'=>'success',
        ]);
        $this->showList();

    }
    public function sessionRemove()
    {
        session()->forget('message');
    }
}