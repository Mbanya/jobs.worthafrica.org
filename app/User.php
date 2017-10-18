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

    public function FlexJobs()
    {
        return $this->hasOne(FlexJob::class);
    }

    public function Jobs()
    {
        return $this->hasOne(Job::class);
    }

    public function Consultants()
    {
        return $this->hasOne(Consultant::class);
    }

    public function hires()
    {
        return $this->hasMany(Hire::class);
    }
    public function Flexhires()
    {
        return $this->hasMany(Hire::class);
    }
    public function TOR()
    {
        return $this->hasMany(Tor::class);
    }
    public function Mocks()
    {
        return $this->hasMany(Mock::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
