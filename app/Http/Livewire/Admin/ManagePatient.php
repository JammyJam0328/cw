<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Patient;
use App\Models\User;
use App\Models\Quarantine;

use Livewire\WithPagination;
use WireUi\Traits\Actions;
class ManagePatient extends Component
{
    use WithPagination, Actions;
    // controls
    public $action='showList';
    public $set_id;
    public $searchTerm='';
    // end controls

    // create properties
    public $firstname;
    public $middlename;
    public $lastname;
    public $age;
    public $date_of_birth;
    public $address;
    public $purok_id;
    public $contact;
    public $sex;
    // end create properties

    // edit propertied
    public $edit_firstname;
    public $edit_middlename;
    public $edit_lastname;
    public $edit_age;
    public $edit_date_of_birth;
    public $edit_address;
    public $edit_purok_id;
    public $edit_contact;
    public $edit_sex;
    // end edit propertied

    protected $validationAttributes =[
        'purok_id'=>'purok'
    ];

    // end create properties
    
    // computed method
    public function getPatientProperty()
    {
        return Patient::where('id',$this->set_id)->first();
    }
    // computed method






    public function render()
    {
        return view('livewire.admin.manage-patient',[
            'patients'=>Patient::where('lastname','like','%'.$this->searchTerm.'%')->paginate(10),
        ])
                ->layout('layouts.admin');
    }
    // methods
    public function showList()
    {
        $this->action='showList';
        $this->set_id=null;
    }
    public function create()
    {
        $this->validate([
            'firstname'=>'required',
            'middlename'=>'nullable',
            'lastname'=>'required',
            'age'=>'required',
            'date_of_birth'=>'required',
            'address'=>'required',
            'purok_id'=>'required',
            'contact'=>'required|unique:patients',
            'sex'=>'required|in:Male,Female'
        ]);

         $email = str_replace(' ', '',$this->lastname.$this->contact).'@gmail.com';

        $user = User::create([
            'role'=>'patient',
            'name'=>$this->firstname.' '.$this->middlename.' '.$this->lastname,
            'email'=>$email,
            'password'=>bcrypt('password12345')
        ]);

        $user->patient()->create([
            'firstname'=>$this->firstname,
            'middlename'=>$this->middlename,
            'lastname'=>$this->lastname,
            'age'=>$this->age,
            'dob'=>$this->date_of_birth,
            'address'=>$this->address,
            'purok_id'=>$this->purok_id,
            'contact'=>$this->contact,
            'sex'=>$this->sex,
        ]);
        $this->notification()->notify([
            'title'=>'Created!',
            'description'=>'Patient has been created!',
            'icon'=>'success'
        ]);
        $this->showList();
        
    }

    public function sessionRemove()
    {
        session()->forget('message');
    }

    public function edit($id)
    {
        $this->set_id=$id;
        $this->edit_firstname = $this->patient->firstname;
        $this->edit_middlename = $this->patient->middlename;
        $this->edit_lastname = $this->patient->lastname;
        $this->edit_age = $this->patient->age;
        $this->edit_date_of_birth = $this->patient->dob;
        $this->edit_address = $this->patient->address;
        $this->edit_purok_id = $this->patient->purok_id;
        $this->edit_contact = $this->patient->contact;
        $this->edit_sex = $this->patient->sex;
        $this->action='edit';
    }

    public function update()
    {
         $this->validate([
            'edit_firstname'=>'required',
            'edit_middlename'=>'nullable',
            'edit_lastname'=>'required',
            'edit_age'=>'required',
            'edit_date_of_birth'=>'required',
            'edit_address'=>'required',
            'edit_purok_id'=>'required',
            'edit_contact'=>'required',
            'edit_sex'=>'required|in:Male,Female'
        ]);
        $this->patient->update([
            'firstname'=>$this->edit_firstname,
            'middlename'=>$this->edit_middlename,
            'lastname'=>$this->edit_lastname,
            'age'=>$this->edit_age,
            'dob'=>$this->edit_date_of_birth,
            'address'=>$this->edit_address,
            'purok_id'=>$this->edit_purok_id,
            'contact'=>$this->edit_contact,
            'sex'=>$this->edit_sex,
        ]);

        $this->notification()->notify([
            'title'=>'Updated!',
            'description' => 'Patient record has been updated!',
            'icon'        => 'success'
        ]);
        $this->showList();
    }

    public function deleteConfirmation($id)
    {
        $this->set_id=$id;
          $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'Are you sure you want to delete this patient?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, delete it',
                'method' => 'confirmDelete',
            ],
            'reject' => [
                'label'  => 'No, cancel',
            ],
        ]);
    }

    public function confirmDelete()
    {
        $this->patient->delete();
        $this->patient->user->delete();
        $this->showList();
         $this->notification()->notify([
            'title'       => 'Deleted!',
            'description' => 'Patient has been deleted!',
            'icon'        => 'success'
        ]);
    }

    public function viewDetails($id)
    {
        $this->set_id=$id;
        $this->action='viewDetails';
    }

    public function dischargedPatientConfirmation($id)
    {
        $this->set_id=$id;
        $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'Are you sure you want to discharge this patient?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, discharge it',
                'method' => 'dischargedPatient',
            ],
            'reject' => [
                'label'  => 'No, cancel',
            ],
        ]);
    }

    public function dischargedPatient()
    {
        $this->patient->update([
            'discharged'=>true
        ]);
        $this->showList();
        $this->notification()->notify([
            'title'       => 'Discharged!',
            'description' => 'Patient has been discharged!',
            'icon'        => 'success'
        ]);
    }
}