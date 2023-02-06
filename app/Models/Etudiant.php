<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public function semestres()
    {
        return $this->hasMany(Semestre::class);
    }
    public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }
}
