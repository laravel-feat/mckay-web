<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    const TYPE_HOMEPAGE = 0;

    const TYPE_ABOUT_US = 1;

    const SECTION_INDEX_ONE = 1;

    const SECTION_INDEX_TWO = 2;

    const SECTION_INDEX_THREE = 3;

    const SECTION_INDEX_FOUR = 4;

    public function getMetaData()
    {
        return @json_decode($this->meta_data, true);
    }
}
