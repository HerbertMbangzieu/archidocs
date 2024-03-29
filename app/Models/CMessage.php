<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Niveau;

class CMessage extends Model
{
    use HasFactory;

    protected $fillabe = ['title', 'contenu', 'niveau_id'];

    public function niveau(){
        return $this->belongsTo(Niveau::class);
    }
}
