<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Event;
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
        //return "Hello";
        $users=User::all();
        $events=Event::all();

        $flyer=Event::lists('id','event_banner');

        return view('homepage',compact('users','events','flyer'));
    }
}
