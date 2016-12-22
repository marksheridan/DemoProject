<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\City;
use App\Venue;
use File;
use Auth;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use App\Http\Requests;

class EventController extends Controller
{
    public function create($value)
    {
        $cities=City::where("city_status","=","active")->lists('city_name','city_id');
        if($value=="guest")
        {    
            $cust="Guestlist";
            return view('events.addevent',compact('cities','cust'));
        }else{
            $cust="RSVP";
            return view('events.rsvp',compact('cities','cust'));
        }
    }

    public function store(Request $request)
    {

        //
        $this->validate($request, [
        'event_name' => 'required',
        'event_banner'=>'required',
        //'event_status' => 'required',
        'event_date' => 'required',
        'event_start_time' => 'required',
        'event_end_time' => 'required',
        'event_description' => 'required',
        ]);
        
    	$input=$request->except('_token','event_banner','event_date','event_start_time','event_end_time','event_close_time');

        
        $timestamp = date('Y-m-d G:i:s', strtotime($request->event_date ." ". $request->event_start_time));
        $input['event_date']=$timestamp;
        $input['event_start_time']=$timestamp;
        
        $timestamp = date('Y-m-d G:i:s', strtotime($request->event_date ." ". $request->event_close_time));
        $input['event_close_time']=$timestamp;

        $timestamp = date('Y-m-d G:i:s', strtotime($request->event_date ." ". $request->event_end_time));
        $input['event_end_time']=$timestamp;


        $input['created_by']=Auth::User()->id;
        $input['user_id']=Auth::User()->id;

        $destinationPath = public_path('flyer');
        $filepath=public_path('/eventimages/');
        
        $file=$request->event_banner;
        if($request->hasfile('event_banner'))
        { 
            $ext = File::extension($file);
            $input['event_banner'] = time().'.'. $file->getClientOriginalExtension();

            $img = Image::make($file->getRealPath());
            $img->resize(1000, 400)->save($destinationPath.'/'.$input['event_banner']);
            
              
            $file->move($filepath, $input['event_banner']);
        }   
    	Event::create($input);

    	return redirect('/usereventlist');
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
        $venuename=Venue::where('venue_id',$event->event_venue_id)->select('venue_name')->first();
        $cityname=City::where('city_id',$event->event_city_id)->select('city_name')->first();
        return view('auth.eventdisplay',compact('event','cityname','venuename'));
    }


    public function getVenues($city){
        $venues = Venue::where('venue_city', $city)->get();
        //dd($venues);
        return $venues;
        
    }

}
