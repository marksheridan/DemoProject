<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'event_guestlist';
    
    protected $fillable = [
     'clubber_id','event_id','business_user_id','guest_name',
     'guest_phone_no','guest_email','no_of_couples','guest_entry_code',

    ];
           
           
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    
    ];


    
}
