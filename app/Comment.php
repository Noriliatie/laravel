<?php

namespace App;

class Comment extends Model
{
    //comments->post (-> maksud "give me")
    public function note(){
        return $this->belongsTo(Note::class);
    }
}
