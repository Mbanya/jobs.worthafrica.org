<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use URL;


class Post extends Model
{
    protected $fillable =[
        'user_id','organisation_type','email','Job_title','location',
        'job_type','reference_code','key_qualification',
        'Qualification_Description','experience',
        'Responsibilities','skills','minSal','maxSal','start_date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}