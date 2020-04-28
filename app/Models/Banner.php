<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\BaseModel;

class Banner extends BaseModel
{
    

    
    
    public static function getTypes()
    {
        return [
            Page::TYPE_HOMEPAGE=>__('Homepage'),
            Page::TYPE_ABOUT_US=>__('About Us'),
            Page::TYPE_SERVICES=>__('Services'),
            Page::TYPE_CONTACT_US=>__('Contact Us'),
            Page::TYPE_TEAM=>__('Team')
            
        ];
    }
    
    public function getType() 
    {
        $types=self::getTypes();
        return isset($types[$this->type_id])?$types[$this->type_id]:'Not Defined';
    }
    
    public function getBannerUrl() 
    {
        return asset("public/uploads/{$this->path}");
        
    }
}
