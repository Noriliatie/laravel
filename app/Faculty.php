<?php

namespace App;

class Faculty extends Model
{
    public function lecturers() {
        return $this->hasMany(Lecturer::class);
    }
}
