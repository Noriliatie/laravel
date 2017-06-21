<?php

namespace App;

class Lecturer extends Model
{
    public function notes() {
        return $this->hasMany(Note::class);
    }
    
    public function user() {
        return $this->hasOne(User::class);
    }
    
    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
