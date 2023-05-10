<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Formation;

class Categorie extends Model
{
    use HasFactory;

    public function formations(){
        return $this->hasMany(Formation::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function categories(){
        return $this->hasMany(Categorie::class);
    }
}
