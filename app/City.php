<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'cities';
    
    protected $fillable = [
     'city_name', 'city_status', 'city_tier','created_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    
    ];

    public function venues()
    {
    return $this->hasMany('App\Venue', 'venue_city', 'city_id');
    }


}
