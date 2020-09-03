<?php

namespace App\Model\user;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Overtrue\LaravelFollow\Traits\CanFollow;
use Overtrue\LaravelFollow\Traits\CanBeFollowed;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    //use CanFollow, CanBeFollowed;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password', 'username'
    ];*/
    protected $fillable = [
        'name', 'email', 'password',
        'avatar', 'provider_id', 'provider',
        'access_token',
        'password', 'remember_token',
   ];

   //You can also use below statement

   protected $guarded = ['*'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'social' => 'array',
    ];

    // BTW: in most of case you should keep email in lowercase
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function verifyUser()
    {
        return $this->hasOne('App\Model\user\VerifyUser');
    }
    public function posts(){
        return $this->hasMany(App\Model\user\Post::class);
    }
    public function getPostsCountAttribute(){
        return $this->posts()->count();
    }
    public function identities() {
        return $this->hasMany('App\Model\user\SocialIdentity');
     }

}
