<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TOR extends Model
{
    protected $fillable =[
        'user_id','title','summary','start_date'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
