<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

use App\Http\Requests;

class UserController extends Controller
{
    public function show()
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
    }

    public function register()
    {
        $cities=City::lists('city_name','city_id');
        dd($cities);
    }

    public function showartist()
    {
         
    }

    public function showvenue()
    {

    }
     public function artist_profile()
    {
        return view('users.artist_profile');
    }

     public function user_eventlist()
    {
        return view('users.user_eventlist');
    }
     public function guest_list()
    {
        return view('users.guest_list');
    }
    public function user_profile()
    {
        return view('users.user_profile');
    }
}
