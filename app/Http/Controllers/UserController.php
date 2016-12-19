<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use Auth;
use App\User;

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

        //dd($request);
        //dd($id);
        $filepath=public_path('/images/');
        $file=$request->user_img;
        if($request->hasfile('user_img'))
        { 
            $name = time(). '-' .$file->getClientOriginalName();
            $input['user_img'] = $name;
            $file->move($filepath, $input['user_img ']);
        }

        $input=$request->all();
        
        if($input['password']=="")
        {
            $input =$request->except('_token','password');
        }    
        else
        {
            $input = $request->except('_token'); 
        } 
        //dd($input);  
        User::where("id",$id)->update($input);
        return redirect('/userprofile');
    }



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
    
    public function event_details()
    {
        return view('users.event_details');
    }
    public function edit_event()
    {
        return view('users.edit_event');
    }
}
