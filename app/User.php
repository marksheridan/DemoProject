<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends \Eloquent implements Authenticatable
{

	use AuthenticableTrait;
	public $table='users';
	protected $primaryKey = 'id';

    protected $fillable = [
        'user_name','user_type','user_email','password', 'user_phone_no', 
        'user_alt_email', 'user_alt_phone', 'user_city', 'user_img', 
        'user_status', 'user_facebook_link',
        ];

    public function guests()
    {
        return $this->hasMany('App\Guest', 'business_user_id', 'id');
    }

    public function event()
    {
        return $this->hasMany('App\Event');
    }
}
