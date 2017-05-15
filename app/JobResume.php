<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobResume extends Model
{
    protected $fillable = ['Job_id', 'filename'];

    public function resume()
    {
        return $this->belongsTo('App\Job');
    }
}
