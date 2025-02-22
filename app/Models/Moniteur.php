<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo', 'phoneNo', 'birthdate', 'sexe', 'cni', 
        'cniRecto', 'cniVerso', 'carteMoniteur', 'numeroCarteMoniteur', 
        'status', 'user_id', 'school_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
    
}