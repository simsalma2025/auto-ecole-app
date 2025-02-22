<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'phoneNo',
        'email',
        'schoolName',
        'schoolAddress',
        'city',
        'type',
        'status',
    ];
}