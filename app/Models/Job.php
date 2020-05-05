<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    const TYPE_FULL_TIME=0; 
    const TYPE_PART_TIME=1;
    const TYPE_INTERNSHIP=2;
    const TYPE_FREELANCER=3;


    public static function getTypes() 
    {
        return [
            self::TYPE_FULL_TIME=>__('Full Time'),
            self::TYPE_PART_TIME=>__('Part Time'),
            self::TYPE_INTERNSHIP=>__('Internship'),
            self::TYPE_FREELANCER=>__('Freelancer')

        ];
    }


    public function getType()
    {
        $list=self::getTypes(); 
        return isset($list[$this->type_id])?$list[$this->type_id]:'NA';
    }

    public function getRating() 
    {
        $rating=round($this->job_rating);
        $rating=min($rating,5);
        
        $html = '' ;
        for($i=1;$i<=$rating;$i++)
        {
            $html.='<i class="fa fa-star filled"></i>';
        }

        for($i=$rating;$i<5;$i++)
        {
             $html.='<i class="fa fa-star"></i>'; 
        }
        return $html;
        
        
    }

    protected $fillable=[
        'title',
        'type_id',
        'category_id',
        'job_rating',
        'skype_username',
        'contact_number',
        'company_name',
        'company_logo',
        'address',
        'desc',
        'required_knowledge_desc',
        'education_desc',
        'company_overview',
        'experiance',
        'salary_from',
        'salary_to',
        'qualification',
        'contact_email',
        'short_desc'
    ];

    public function getCompanyLogo() 
    {
        return asset("public/uploads/{$this->company_logo}");
        
    }
}
