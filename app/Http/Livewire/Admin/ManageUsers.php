<?php
namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class ManageUsers extends Component
{
    use WithPagination, Actions;
    public $filter='';
    public $searchTerm='';

    public $set_id;
    
    public function render()
    {
        return view('livewire.admin.manage-users',[
            'users'=>User::where('name','like','%'.$this->searchTerm.'%')->where('role','like','%'.$this->filter.'%')->latest()->paginate(10)
        ])
        ->layout('layouts.admin');

    }
    public function getUserProperty()
    {
        return User::where('id',$this->set_id)->first();
    }

    public function resetPasswordConfirmation($id)
    {
        $this->set_id=$id;
        $this->notification()->confirm([
            'title'       => 'Are you Sure?',
            'description' => 'Are you sure you want to reset the password?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, reset it',
                'method' => 'reserPassword',
            ],
            'reject' => [
                'label'  => 'No, cancel',
            ],
        ]);
    }

    public function reserPassword()
    {
        $default_password='password12345';
        $this->user->update([
            'password'=>bcrypt($default_password),
        ]);
        $this->notification()->notify([
            'title'=>'Success!',
            'description'=>'Password has been reset to '.$default_password.'!',
            'icon'=>'success',
        ]);
    }

    
}