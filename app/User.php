<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public static function byEmail($email){
        return static::whereEmail($email)->first();
    }

    public function FlexJob()
    {
        return $this->hasOne(FlexJob::class,'user_id');
    }

    public function Job()
    {
        return $this->hasOne(Job::class,'user_id');
    }

    public function Consultant()
    {
        return $this->hasOne(Consultant::class,'user_id');
    }

    public function Hire()
    {
        return $this->hasMany(Hire::class,'user_id');
    }
    public function Flexhire()
    {
        return $this->hasMany(Hire::class,'user_id');
    }
    public function TOR()
    {
        return $this->hasMany(TOR::class,'user_id');
    }
    public function Mock()
    {
        return $this->hasMany(Mock::class,'user_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }


}
