<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finding extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function monitoring()
    {
        return $this->belongsTo(Monitoring::class);
    }

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }
}