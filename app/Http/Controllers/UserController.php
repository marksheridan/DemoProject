<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Event;
use Auth;
use App\User;
use App\Guest;
use App\Venue;
use App\Http\Controllers;




use App\Http\Requests;

class UserController extends Controller
{
    public function user_profile()
    {
        $usr = Auth::User();
        $city = City::where("city_status", "=","active")->lists('city_name','city_id');
        //dd($usr);
        return view('users.user_profile',compact('usr','city'));
    }

    public function updateuser(Request $request,$id)
    {

        if($request->password=="")
        {
            $input =$request->except('_token','password','user_img');
        }    
        else
        {
            $input = $request->except('_token','user_img'); 
        } 
        $destinationPath = public_path('images');
        $file1 = $request->user_img;
        if($request->hasFile('user_img'))
        { 
           
            $input['user_img'] = time().'.'. $file1->getClientOriginalExtension();  
            $file1->move($destinationPath, $input['user_img']);
        }   
        // dd($input);  
        User::where("id",$id)->update($input);
        return redirect('/userprofile');
    }

    public function artist_profile($id)
    {
        //dd($id);

        $usr=User::where('id',$id)->first();
        $evn = Event::where('user_id',$id)->get();
        //dd($evn);
        return view('users.artist_profile',compact('usr','evn'));
    }

    
    public function user_eventlist()

    {
        $usr = Auth::User();
        $event=Event::where('user_id',$usr->id)->get();
        return view('users.user_eventlist',compact('event'));
    }


    public function event_details($id)
    {
        $event=Event::where('id',$id)->first();
        $gus=Guest::where('event_id',$id)->get();
        $venuename=Venue::where('venue_id',$event->event_venue_id)->select('venue_name')->first();
        $cityname=City::where('city_id',$event->event_city_id)->select('city_name')->first();

        return view('users.event_details',compact('event','gus','venuename','cityname'));
    }


    public function guest_list()
    {
        $user=User::select('user_name')->where('id',Auth::User()->id)->first();
        $gus=Guest::where('business_user_id',Auth::User()->id)->get();
        
        /*
        $user = User::where('id',Auth::User()->id)->with('guests')->first();
        $count = $user->guests()->count();
        //dd($count);*/

       /* $event=Event::where('',Auth::User->with('guests')->first();*/


        return view('users.guest_list',compact('gus','user'));
    }

    public function edit_event($id)
    {
        $cities=City::where("city_status","=","active")->lists('city_name','city_id');
        $event=Event::where('id',$id)->first();

        //dd($event->event_date);
        $datetime = explode(" ",$event->event_date);
        $event['event_date'] = $datetime[0];
        $event['event_start_time'] = $datetime[1];

        $datetime = explode(" ",$event->event_end_time);
        $event['event_end_time'] = $datetime[1];
        if($event->event_type!="RSVP")
        {
            $datetime = explode(" ",$event->event_close_time);
            $event['event_close_time'] = $datetime[1];
        }

        return view('users.edit_event',compact('event','cities'));
    }


    public function getVenues($city){
        $venues = Venue::where('venue_city', $city)->get();
        //dd($venues);
        return $venues;
        
    }

    public function userevent($id)
    {
        $event=Event::where('id',$id)->first();
        $venuename=Venue::where('venue_id',$event->event_venue_id)->select('venue_name')->first();
        $cityname=City::where('city_id',$event->event_city_id)->select('city_name')->first();

        return view('users.user_eventdisplay',compact('event','venuename','cityname'));
    }

    /*public function show()
    {
    	$users=User::all();
    	return($users);
    }

    public function store(Request $request)
    {
    	$input=$request->all();
    	User::create($input);
    	return($input);
    }

    public function update(Request $request,$id)
    {
    	$input=$request->all();
    	User::where('id',$id)->updatinput();
    	return("Success");
    }
    
    public function delete($id)
    {
    	User::where('id',$id)->delete();
    	return("Deleted");
    }*/   

    
}
