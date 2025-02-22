<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateStart',
        'time',
        'status',
        'status_dmd_candidat',
        'school_id',
        'moniteur_id',
        'car_id',
        'candidat_id',
        'period_id',
    ];

    // Relation avec School
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    // Relation avec Moniteur
    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class);
    }

    // Relation avec Car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // Relation avec Candidat
    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    // Relation avec Period
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}