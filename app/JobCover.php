<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCover extends Model
{
    protected $fillable = ['Job_id', 'filename'];

    public function cover()
    {
        return $this->belongsTo('App\Job');
    }
}
