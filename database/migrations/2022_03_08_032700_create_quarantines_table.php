<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarantines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('facility_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->string('initial_status')->nullable();
            $table->string('initial_symptoms')->nullable();
            $table->boolean('discharged')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quarantines');
    }
};