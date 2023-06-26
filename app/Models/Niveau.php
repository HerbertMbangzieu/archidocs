<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Filiere;

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
}
