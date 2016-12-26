<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guest;
use App\Event;
use Auth;
use Carbon\Carbon;

class GuestController extends Controller
{
    //
    public function create($id)
    {
        $cc=$id;
        if(Auth::guest())
        {
            return view('auth.add_to_guestlist',compact('cc'));
        }
        else
        {
            return view('users.user_add_to_guestlist',compact('cc'));
        }


		//$cc=$id;
        
        
    }

    public function store(Request $request ,$id)
    {
        //dd($request);

        $evn = Event::where('id',$id)->first();
        //dd($evn);
        $input= $request->except('_token');
        $input['business_user_id']= $evn->user_id;
        $input['event_id'] = $id;
        $string = str_random(4);
        $input['guest_entry_code']= $string; 
        $tgl=$evn['event_total_guest']+$request->no_of_couples;
        Event::where('id',$id)->update(array('event_total_guest'=>$tgl));
        Guest::create($input);

        //dd($input['guest_name']);
        if(Auth::guest())
        {
            return view ('auth.guest_display',compact('input'));
        }else{
            return view ('users.user_guest_display',compact('input'));
        }
    }
   
}
