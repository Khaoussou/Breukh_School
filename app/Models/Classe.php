<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    
    public function niveaux()
    {
        return $this->belongsTo(Niveau::class);
    }
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'niveau_id'
    ];
}
