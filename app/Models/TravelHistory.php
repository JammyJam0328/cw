<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelHistory extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function quarantine()
    {
        return $this->belongsTo(Quarantine::class);
    }
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}