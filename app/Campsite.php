<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campsite extends Model
{

    public function park()
    {
        return $this->belongsTo(Park::class);
    }

    protected $fillable = ['name', 'description', 'park_id'];
}
