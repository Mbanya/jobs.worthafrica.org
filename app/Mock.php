<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mock extends Model
{
    protected $fillable =[
        'user_id','first_name','last_name','email','phone_number','category','date_interview',
        'major'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
