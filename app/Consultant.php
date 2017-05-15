<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $fillable =[
        'user_id','first_name','last_name','email','phone_number','city','country',
        'key_qualification','experience','technical','donor','wkexp','salary_rate','conflict',
        'availability'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
