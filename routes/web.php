<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/dashboard');
    }
    return redirect()->route('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    switch (auth()->user()->role) {
        case 'admin':
            return redirect()->route('admin.dashboard');
            break;
        case 'officestaff':
            
            break;
       case 'healthworker':
            
            break;
    }
})->name('dashboard');

// make routes for admin with prefix admin with middleware auth:sanctum and verified
Route::prefix('admin')->middleware(['auth:sanctum', 'verified','admin'])->group(function () {
    Route::get('/dashboard', \App\Http\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('/manage/patients', \App\Http\Livewire\Admin\ManagePatient::class)->name('admin.manage.patients');
    Route::get('/manage/patient/{patient_id}/quarantine', \App\Http\Livewire\Admin\ManageQuarantine::class)->name('admin.manage.quarantine');
   
    Route::get('/manage/users', \App\Http\Livewire\Admin\ManageUsers::class)->name('admin.manage.users');
    Route::get('/quarantine/{quarantine_id}/monitoring/', \App\Http\Livewire\Admin\Monitoring::class)->name('admin.monitoring');
    Route::get('/manage/quarantine/{quarantine_id}/travel-histories', \App\Http\Livewire\Admin\ManageTravelHistory::class)->name('admin.manage.travel-histories');
    Route::get('/ration/inventory', \App\Http\Livewire\Admin\ManageRation::class)->name('admin.manage-ration');
});