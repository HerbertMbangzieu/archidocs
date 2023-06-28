<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\CMessage;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = [
        'niveau',
        'filiere_id'
    ];

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }

    public function etudiant(){
        return $this->hasMany(Etudiant::class);
    }

    public function cmessages(){
        return $this->hasMany(CMessage::class);
    }




}
