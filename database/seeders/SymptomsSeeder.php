<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Symptom;
class SymptomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  'Fever or chills',
        //     'Cough',
        //     'Shortness of breath or difficulty breathing',
        //     'Fatigue',
        //     'Muscle or body aches',
        //     'Headache',
        //     'New loss of taste or smell',
        //     'Sore throat',
        //     'Congestion or runny nose',
        //     'Nausea or vomiting',
        //     'Diarrhea',

        Symptom::create([
            'name' => 'Fever or chills',
        ]);

        Symptom::create([
            'name' => 'Cough',
        ]);

        Symptom::create([
            'name' => 'Shortness of breath or difficulty breathing',
        ]);

        Symptom::create([
            'name' => 'Fatigue',
        ]);

        Symptom::create([
            'name' => 'Muscle or body aches',
        ]);

        Symptom::create([
            'name' => 'Headache',
        ]);

        Symptom::create([
            'name' => 'New loss of taste or smell',
        ]);

        Symptom::create([
            'name' => 'Sore throat',
        ]);

        Symptom::create([
            'name' => 'Congestion or runny nose',
        ]);

        Symptom::create([
            'name' => 'Nausea or vomiting',
        ]);

        Symptom::create([
            'name' => 'Diarrhea',
        ]);

    }
}