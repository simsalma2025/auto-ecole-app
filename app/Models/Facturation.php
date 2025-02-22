<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturation extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'montant', 'payé', 'reste', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}