<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campsite extends Model
{
    protected $fillable = ['name', 'description', 'park_id'];
}
