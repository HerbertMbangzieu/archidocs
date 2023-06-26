<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ecole;
use App\Models\Filiere;

class Cycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'ecole_id',
    ];

    public function ecole(){
        return $this->belongsTo(Ecole::class);
    }

    public function filieres(){
        return $this->hasMany(Filiere::class);
    }



}
