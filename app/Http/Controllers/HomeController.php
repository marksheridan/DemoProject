<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
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
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //return "Hello";
              $users=User::all();

        return view('homepage',compact('users'));
    }
}
