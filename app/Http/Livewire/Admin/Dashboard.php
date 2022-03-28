<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Patient;
use App\Models\User;
use App\Models\Quarantine;
class Dashboard extends Component
{
    protected function getPatientCount()
    {
        return Patient::with(['quarantines'=>function($query){
            $query->where('dischared',0)->orderBy('created_at','desc')->first();
        }])->count();
    }
    public function render()
    {
       
    
        return view('livewire.admin.dashboard',[
            'patients_count'=> $this->getPatientCount(),
            'users_count'=>User::count(),
        ])
        ->layout('layouts.admin');
    }
}