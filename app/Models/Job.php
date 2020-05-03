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
        return isset($list[$this->type-id])?$list[$this->type_id]:'NA';
    }


    protected $fillable=[
        'title',
        'type_id',
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
        'contact_email'
    ];

    public function getCompanyLogo() 
    {
        return asset("public/uploads/{$this->company_logo}");
        
    }
}
