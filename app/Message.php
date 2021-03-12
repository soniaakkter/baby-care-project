<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    public function senders()
    {
        return $this->belongsTo('App\User','sender','id');
    }
}
