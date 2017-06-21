<?php

namespace App;

class Note extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    
    public function lecturer(){
        return $this->belongsTo(Lecturer::class);
    }
    
    public function addComment($body){
//        Comment::create([
//            'body' => $body,
//            'note_id' => $this->id
//        ]);
        //OR
        //sebab dh ade relationship
        $this->comments()->create(compact('body'));
    }
}
