<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'venue_name', 'venue_phone_no', 'venue_category','user_id', 
        'latitude', 'longitude', 'venue_city', 'venue_cover_img', 'venue_status',
        'venue_card', 'venue_parking', 'venue_seats' ,'venue_smoking', 'venue_address',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    
    ];

    public function city()
    {
    //return $this->belongsTo('App\City', 'venue_city');
   return $this->belongsTo('App\City', 'city_id', 'city_name');
    }


}
