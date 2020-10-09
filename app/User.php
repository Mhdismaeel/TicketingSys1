<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\CustomVerifyEmailQueued;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
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

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();
        return $this->api_token;
    }



    public function hasAnyRoles($roles)
    {
        if($this->roles()->whereIn('name',$roles)->first())
        {
            return true;
        }

        false;

    }

    public function hasRole($role)
    {
        if($this->roles()->where('name',$role)->first())
        {
            return true;
        }

        false;

    }

//relations
public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }


    public function teams()
{
    return $this->belongsToMany('App\Models\Team');

}

public function tickets_reporter()
    {
        return $this->hasMany('App\Models\Ticket','reporterid');
    }

    public function tickets_assignee()
    {
        return $this->hasMany('App\Models\Ticket','assignid');
    }





}
