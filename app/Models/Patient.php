<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function quarantines()
    {
        return $this->hasMany(Quarantine::class);
    }

    public function purok()
    {
        return $this->belongsTo(Purok::class);
    }
}