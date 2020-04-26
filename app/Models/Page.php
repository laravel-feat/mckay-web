<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    const TYPE_HOMEPAGE=0 ; 
    const TYPE_ABOUT_US=1; 
    
    
    public function getMetaData() 
    {
        return @json_decode($this->meta_data,true);
    }
}
