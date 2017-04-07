<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flexhire extends Model
{
   protected $fillable =[
     'user_id','organisation_name','organisation_size','organisation_type',
       'Physical_Address','email','key_qualification','Qualification_Description','experience',
       'Responsibilities','skills','minSal','maxSal','Frequency_Rate','start_date','end_date'
   ];

    public function user()
    {
        return $this->belongsTo('Cartalyst\Sentinel\Users\EloquentUser','user_id');
    }
}
