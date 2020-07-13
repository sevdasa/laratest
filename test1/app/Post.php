<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    public function scopeVerifiedPosts($query){
        return $query->where('status','verified');

    }
    public function user(){
        return $this->belongsTo(User::class,'author','id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
