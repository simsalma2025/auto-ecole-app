<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'brand',
        'version',
        'engine',
        'color',
        'matricule',
        'kilometrage',
        'status',
        'school_id',
    ];

    // Relation avec School
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    // Relation avec Seances
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}