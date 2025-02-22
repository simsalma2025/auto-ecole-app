<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'experience', 'address', 'city', 'phoneNo', 
        'logo', 'founded', 'workingTime', 'description', 'status', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moniteurs()
    {
        return $this->hasMany(Moniteur::class);
    }

    public function candidats()
    {
        return $this->hasMany(Candidat::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}