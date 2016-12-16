<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\City;
use App\Venue;
use File;
use Auth;
use App\Http\Requests;

class EventController extends Controller
{
    public function create()
    {
    	//$events=Event::all();
        $cities=City::lists('city_name','city_id');
    	return view('events.addevent',compact('cities'));
    }

    public function store(Request $request)
    {
    	$input=$request->except('_token','event_banner');
        //dd(Auth::User()->id);

        
        /*$timestamp = date("m/d/Y", strtotime($request->event_date));
        $input['event_date']=$timestamp;*/
        $input['created_by']=Auth::User()->id;
        $input['user_id']=Auth::User()->id;
        $filepath=public_path('/eventimages/');
        $file=$request->event_banner;
        if($request->hasfile('event_banner'))
        { 
            $ext = File::extension($file);
            $name = time().$ext;
            $input['event_banner'] = $name;
            $file->move($filepath, $name);
        }
        //dd($input);
    	Event::create($input);
    	return('Success');
    }

    public function update(Request $request,$id)
    {
    	$input=$request->all();
    	Event::where('id',$id)->update($input);
    	return("Success");
    }
    
    public function delete($id)
    {
    	Event::where('id',$id)->delete();
    	return("Deleted");
    }

    public function show($id)
    {
        $event=Event::where('id',$id)->first();
        return view('auth.eventdisplay',compact('event'));
    }


    public function getVenues($city){
        $venues = Venue::where('venue_city', $city)->get();
        //dd($venues);
        return $venues;
        
    }

}
