<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\State;
class City extends Model
{
    
    public static function getCities() 
    {
       $query =  self::with("state")->with("state.country")->whereHas('state.country',function($query)  {
        $query->where("name","like","United States");
    });
        
        return $query->pluck('name','id')->all();
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State'); // links this->course_id to courses.id
    }

}
