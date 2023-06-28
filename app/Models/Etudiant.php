<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Niveau;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'niveau_id'];

    public function niveaus(){
        return $this->belongsTo(Niveau::class);
    }
}
