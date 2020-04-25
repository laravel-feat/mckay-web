<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    
    const TYPE_HOMEPAGE=0 ; 
    const TYPE_ABOUT_US=1;
    const TYPE_SERVICES=2;
    
    
    public static function getTypes()
    {
        return [
            self::TYPE_HOMEPAGE=>'Homepage',
            self::TYPE_ABOUT_US=>'About Us',
            self::TYPE_SERVICES=>'Services'
            
        ];
    }
}
