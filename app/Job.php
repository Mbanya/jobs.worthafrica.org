<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =[
        'user_id','first_name','last_name','email','phone_number',
        'key_qualification','other_key_qualification','experience','skills',
        'profession','availability','location','industry'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
