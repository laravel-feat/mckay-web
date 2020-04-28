<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable=[
        'office_address',
        'contact_number' ,
        'contact_email' ,
        'facebook_page_link',
        'twitter_page_link',
        'instagram_page_link',
        'site_logo' ,
        'footer_copyright_text'  
        
    ];
    
    public function getLogoUrl()
    {
        return asset("public/uploads/{$this->site_logo}");
        
    }
    
    
}
