<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =[
        'user_id','first_name','last_name','email','phone_number',
        'key_qualification','other_key_qualification','experience','skills',
        'CV','cover_letter','profession','availability'
    ];
    public function user()
    {
        return $this->belongsTo('Cartalyst\Sentinel\Users\EloquentUser','user_id');
    }
}