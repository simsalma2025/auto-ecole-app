<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $fillable=[
        "text",
    ];
    public function seances(){
        return $this->hasMany(Seance::class);
    }
    
}