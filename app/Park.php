<?php

namespace App;


class Park extends Model
{
    public function campsites()
    {
        return $this->hasMany(Campsite::class);
    }
}
