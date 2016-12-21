<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id','event_name','event_banner','event_city_id',
        'event_venue_id', 'event_status', 'event_flyer_paid', 
        'event_type', 'event_date', 'event_start_time', 'event_end_time', 
        'event_closing_time','event_description','event_requirement',
         'video_link', 'tagged_artists', 'tagged_promoters', 
         'event_total_guest','event_guest_limit', 'created_by', 
         'created_at', 'updated_at'
    ];


    public function guests()
    {
    return $this->hasMany('App\Guest', 'business_user_id', 'id');
    }
}
