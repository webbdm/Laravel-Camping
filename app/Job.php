<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function park()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['title', 'description'];
}