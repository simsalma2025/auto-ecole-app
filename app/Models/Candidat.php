<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'phoneNo',
        'birthdate',
        'sexe',
        'cni',
        'cniRecto',
        'cniVerso',
        'contract',
        'certificate',
        'tariffs',
        'paid',
        'status',
        'user_id',
        'school_id',
    ];

    // Relation avec User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

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