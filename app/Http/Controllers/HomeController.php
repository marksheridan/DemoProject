<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Event;
use App\City;
use Auth;
use Input;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function addevent()
    {
        return view('events.addevent');
    }
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
        return view('home',compact('users','event'));
    }

    public function root()
    {
        $cities=City::where('city_status',"active")->lists('city_name','city_id');
        //$events=Event::all();
        $events=Event::take(3)->get();
        $popular=Event::orderBy('event_total_guest','desc')->get();
        $flyer=Event::lists('id','event_banner');
        return view('homepage',compact('events','flyer','cities','popular'));
    }

    public function getmore($val)
    {
        $skipval=Input::get('skip');
        $events=Event::where('event_city_id',$val)->take(3)->skip($skipval)->get();
        
        return($events);
    }
    public function getevents($val)
    {
        $skipnum=Input::get('skip');
        $events=Event::where('event_city_id',$val)->take(3)->get();
        return($events);
    }

    public function getallevents()
    {
        $skipval=Input::get('skip');
        $events=Event::take(3)->skip($skipval)->get();
        return($events);
    }

    public function getmoreall()
    {
        $skipval=Input::get('skip');
        $events=Event::take(3)->skip($skipval)->get();
        
        return($events);
    }


}
