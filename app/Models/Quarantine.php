<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarantine extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
    public function monitorings()
    {
        return $this->hasMany(Monitoring::class);
    }
}