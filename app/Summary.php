<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    public $fillable = ['title', 'description', 'number', 'tags', 'text', 'userId', 'type'];
}
