<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    protected $fillable =[
        'user_id','organisation_name','organisation_size','organisation_type',
        'Physical_Address','email','key_qualification','Qualification_Description','experience',
        'Responsibilities','skills','minSal','maxSal','location','job_type','start_date'
    ];

    public function user()
    {
        return $this->belongsTo(EloquentUser::class);
    }
    public function getShortContentAttribute(){
        return substr($this->Qualification_Description,0,random_int(60,250)). '...';
    }

}
