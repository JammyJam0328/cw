<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;
use App\Models\User;
use App\Models\Purok;
class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'role'=>'admin',
            'name'=>'System Administrator',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin12345'),
        ]);
        // healthworker
        User::create([
            'role'=>'healthworker',
            'name'=>'Health Worker',
            'email'=>'healtworker@gmail.com',
            'password'=>bcrypt('healthworker12345'),
        ]);
        // officestaff
        User::create([
            'role'=>'officestaff',
            'name'=>'Office Staff',
            'email'=>'officestaff@gmail.com',
            'password'=>bcrypt('officestaff12345'),
        ]);


         Facility::create([
            'name' => 'Home Quarantine',
            'address' => 'Home Quarantine',
        ]);
        Facility::create([
            'name' => 'Marbel-1 Central Elementary School',
            'address' => 'Barangay Gen. Paulino Santos',
        ]);
        Facility::create([
            'name' => 'Koronadal Central Elementary School-1 ',
            'address' => ' Barangay Zone IV',
        ]);
        Facility::create([
            'name' => 'Anawim-Koronadal Foundation’s home for abandoned elderly',
            'address' => 'Koronadal City',
        ]);

          Purok::create([
            'name' => 'Purok Lower Cadidang',
        ]);
        Purok::create([
            'name' => 'Purok Upper Cadidang',
        ]);
        Purok::create([
            'name' => 'Purok Upper San Jose',
        ]);
        Purok::create([
            'name' => 'Purok Lower Supon',
        ]);
        Purok::create([
            'name' => 'Purok Upper Supon',
        ]);
        Purok::create([
            'name' => 'Purok San Isedro',
        ]);
        Purok::create([
            'name' => 'Purok Centro',
        ]);
        Purok::create([
            'name' => 'Purok Tinago',
        ]);
        Purok::create([
            'name' => 'Purok Boundary',
        ]);
        Purok::create([
            'name' => 'Purok Apostol',
        ]);
        
    }
}