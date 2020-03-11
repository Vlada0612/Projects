<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $table='comments';

    public function summary() {
    return $this->belongsTo('App\Summary', 'summary_id');
    }
}
