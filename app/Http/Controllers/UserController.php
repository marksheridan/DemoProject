<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Event;
use Auth;
use App\User;
use App\Guest;
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
        //return view('users.user_eventlist');
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
