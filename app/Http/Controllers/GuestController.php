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
       // return("hai");
    	//dd($id);
        //$dt=Carbon::create(2012,12,01,0);
        //$dt=Carbon::today();

       
        //dd($dt);

		$cc=$id;
        return view('auth.add_to_guestlist',compact('cc'));
        
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


    //dd($input);
    
    $gu = Guest::create($input);
    //dd($gu); 
    return redirect('/');
    
    }
}
