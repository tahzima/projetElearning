<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\Categorie;
use App\Models\Like;
use App\Models\Commentaire;
use App\Models\Inscription;
use App\Models\Favori;

class Formation extends Model
{
    use HasFactory;

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function sections(){
        return $this->hasMany(Section::class);
    }


    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }
    public function favoris(){
        return $this->hasMany(Favori::class);
    }

}
