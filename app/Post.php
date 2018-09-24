<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function park()
    {
        return $this->belongsTo(Park::class);
    }

    public function campsite()
    {
        return $this->belongsTo(Campsite::class);
    }

    protected $fillable = ['title', 'description', 'park_id'];
}
