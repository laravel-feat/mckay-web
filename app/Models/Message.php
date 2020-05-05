<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    const TYPE_NORMAL =0; 
    const TYPE_ATTACHMENT=1;


    public function sendor()
    {
        return  $this->belongsTo('App\User','from_id');
    }

    public function receiver() 
    {
        return  $this->belongsTo('App\User','to_id');
    }
}
