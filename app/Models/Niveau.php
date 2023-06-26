<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
        'id'
    ];
}
