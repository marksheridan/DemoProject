<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class User extends \Eloquent implements Authenticatable
{

	use AuthenticableTrait;
	public $table='users';
    //

    protected $fillable = [
        'user_name','user_type','user_email','password', 'user_phone_no', 'user_alt_email', 'user_alt_phone', 'user_city', 'user_img', 'user_status', 'user_facebook_link',
        ];
}
