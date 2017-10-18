<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use URL;


class Post extends Model
{
    protected $fillable =[
        'user_id',
        'email_address',
        'job_title',
        'description',
        'responsibilities',
        'requirements',
        'minSal',
        'maxSal',
        'start_date',
        'deadline',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}