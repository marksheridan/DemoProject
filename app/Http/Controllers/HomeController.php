<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Event;
use App\City;
use Auth;
use Carbon\Carbon;
use DB;
use Input;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function addvenue()
    {
        return view('venues.addvenue');
    }
    public function eventdisplay()
    {
        return view('auth.eventdisplay');
    }

    public function addtoguestlist()
    {
        return view('auth.addtoguestlist');
    }
    public function search()
    {
        return view('search');
    }

    public function index()
    { 

        $event=Event::where('user_id',Auth::User()->id)->get();
        $users=User::all();
        foreach ($users as $user) {
            $user['t_event']=count($user->event);
            $user['t_guest']=$user->event->sum('event_total_guest');
        }
        return view('home',compact('users','event'));
    }

    public function root()
    {
        if(Auth::check())
        {
            return redirect('/home');
        }
        $current_time = Carbon::now()->toDateTimeString();

        $cities=City::where('city_status',"active")->lists('city_name','city_id');
        $events = DB::table('events')
            ->where('event_date','<',$current_time)
            //->orderBy('event_date','desc')
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->take(6)
            ->get();
        
        foreach ($events as $e) {
            $e->edate= Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');
        }
        $popular=DB::table('events')
            ->where('event_start_time','<',$current_time)
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->orderBy('event_total_guest','desc')
            ->take(6)
            ->get();

        foreach ($popular as $e)
        {    
            $e->edate=Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');
        }

        $flyer=Event::lists('id','event_banner');
        return view('homepage',compact('events','flyer','cities','popular'));
    }    

    public function getmore($type)
    {
        $skipval=Input::get('skip');
        if($type=="none")
        {
            $events = DB::table('events')
                ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
                ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
                ->select('events.*','cities.city_name', 'venues.venue_name')
                ->take(3)
                ->skip($skipval)
                ->get();
        }
        else{
            $events = DB::table('events')
                ->where('event_type',$type)
                ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
                ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
                ->select('events.*','cities.city_name', 'venues.venue_name')
                ->take(3)
                ->skip($skipval)
                ->get();   
        }
        foreach ($events as $e)
        {
            $e->edate=Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');
        }

        return($events);
    }
    public function getevents($type)
    {
        //$skipnum=Input::get('skip');
        if($type!="none")
        {
            $events = DB::table('events')
            ->where('event_type',$type)
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->take(6)
            //->skip($skipnum)
            ->get();
        }
        else
        {
            $events = DB::table('events')
            //->where('event_type',$val)
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->take(6)
            //->skip($skipnum)
            ->get();   
        }
        foreach ($events as $e) 
        {
            $e->edate=Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');
        }
        return($events);
    }

    public function getallevents($type,$val)
    {
        $skipval=Input::get('skip');

        if($type == "none")
        {
            $events = DB::table('events')
            ->where('event_city_id',$val)
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->take(6)
            //->skip($skipval)
            ->get();
        }else{
             $events = DB::table('events')
            ->where('event_city_id',$val)
            ->where('event_type',$type)
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->take(6)
            //->skip($skipval)
            ->get();
        }

        foreach ($events as $e) {
            $e->edate=Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');
        }    
        return($events);
    }

    public function getmoreall($type,$val)
    {
        $skipval=Input::get('skip');


        if($type=="none")
        {
            $events = DB::table('events')
                ->where('event_city_id',$val)
                ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
                ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
                ->select('events.*','cities.city_name', 'venues.venue_name')
                ->take(3)
                ->skip($skipval)
                ->get();
        }
        else{
            $events = DB::table('events')
                ->where('event_city_id',$val)
                ->where('event_type',$type)
                ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
                ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
                ->select('events.*','cities.city_name', 'venues.venue_name')
                ->take(3)
                ->skip($skipval)
                ->get();   
        }
        foreach ($events as $e)
        {
            $e->edate=Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');

        }
        return($events);
    }

    public function getpopular($type)
    {
        $skipnum=Input::get('skip');
        
        if($type=="none")
        {
            $popular = DB::table('events')
                ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
                ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
                ->select('events.*','cities.city_name', 'venues.venue_name')
                ->take(3)
                ->skip($skipnum)
                ->get();
        }
        else{
            $popular = DB::table('events')
                ->where('event_type',$type)
                ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
                ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
                ->select('events.*','cities.city_name', 'venues.venue_name')
                ->take(3)
                ->skip($skipnum)
                ->get();   
        }
        foreach ($popular as $e)
        {    
            $e->edate=Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');
        }
        return($popular);
    }

    public function getpopulartype($type)
    {
        if($type=="none")
        {
            
            $popular=DB::table('events')
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->orderBy('event_total_guest','desc')
            ->take(6)
            //->skip($skipnum)
            ->get();

        }
        else
        {
            
            $popular=DB::table('events')
            ->where('event_type',$type)
            ->join('cities', 'events.event_city_id', '=', 'cities.city_id')
            ->join('venues', 'events.event_venue_id', '=', 'venues.venue_id')
            ->select('events.*','cities.city_name', 'venues.venue_name')
            ->orderBy('event_total_guest','desc')
            ->take(6)
            //->skip($skipnum)
            ->get();
            //$dd($popular);
        }
        foreach ($popular as $e)
        {    
            $e->edate=Carbon::parse($e->event_date)->formatLocalized('%A %d %B %Y');
        }
        return($popular);

    }


}
