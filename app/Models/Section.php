<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;
use App\Models\Part;

class Section extends Model
{
    use HasFactory;
    public function formation(){
        return $this->belongsTo(Formation::class);
    }
    public function parts(){
        return $this->hasMany(Part::class);
    }
}
