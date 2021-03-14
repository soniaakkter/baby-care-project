<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    public function frmmessage(){
        return $this->belongsTo(User::class,'from');
    }

    public function tomessage(){
        return $this->belongsTo(User::class,'to');
    }
}
