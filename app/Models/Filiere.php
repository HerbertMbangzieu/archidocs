<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cycle;
use App\Models\Niveau;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'cycle_id'
    ];

    public function cycle(){
        return $this->belongsTo(Cycle::class);
    }

    public function niveaus(){
        return $this->hasMany(Niveau::class);
    }


}
