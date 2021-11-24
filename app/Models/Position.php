<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable=[
        'title'
    ];

    public static function getAll() 
    {
        return self::pluck("title","id")->all();
    }
}
