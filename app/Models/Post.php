<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    CONST PUBLICADO = 2;

    public function users(){
        return $this ->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsTo(category::class);
    }

    public function tags(){
        return $this -> belongsToMany(Tag::class);
    }

    public function images(){
        return $this->morphMany(image::class, 'imageable');
    }
}
