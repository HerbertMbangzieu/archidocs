<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cycle;

class Ecole extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom'
    ];

    public function cycles(){
        return $this->hasMany(Cycle::class);
    }
}
