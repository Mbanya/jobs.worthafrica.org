<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sentinel;

class Hire extends Model
{
    protected $fillable =[
        'user_id','organisation_name','organisation_size','organisation_type',
        'Physical_Address','email','key_qualification','Qualification_Description','experience',
        'Responsibilities','skills','minSal','maxSal','start_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getShortContentAttribute(){
        return substr($this->Qualification_Description,0,random_int(60,250)). '...';
    }
}
