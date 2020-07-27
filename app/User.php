<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

use App\Model\Profile;
use App\Model\Image;
use App\Model\Chat;

class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use SoftDeletes; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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
    ];


    public function profile()
    {
        return $this->hasOne('App\Model\Profile');
    }
    public function images()
    {
        return $this->hasMany('App\Model\Image');
    }
    public function chats()
    {
        return $this->hasMany('App\Model\Chat','from_user_id');
        // return $this->hasMany('App\Model\Chat','from_user_id','to_user_id');
    }
    public function getRouteKeyName(){
     return 'username';
    }
}
