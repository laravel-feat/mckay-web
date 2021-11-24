<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    const TYPE_HOMEPAGE = 0;

    const TYPE_ABOUT_US = 1;
    
    const TYPE_TEAM =2 ;
    
    const TYPE_CONTACT_US=3;
    
    const TYPE_SERVICES=4;
    
    const TYPE_OTHER=5;
    
    const TYPE_CUSTOMER=6;

    const TYPE_LATEST_JOBS=7;

    const TYPE_JOB_DETAIL=8;

    const TYPE_CHAT=9;
    

    const SECTION_INDEX_NONE=0;
    const SECTION_INDEX_ONE = 1;

    const SECTION_INDEX_TWO = 2;

    const SECTION_INDEX_THREE = 3;

    const SECTION_INDEX_FOUR = 4;

    public function getMetaData()
    {
        return @json_decode($this->meta_data, true);
    }
}
