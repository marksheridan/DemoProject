<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guest;

class GuestController extends Controller
{
    //
      public function create()
    {
       // return("hai");
        return view('auth.add_to_guestlist');
        
    }

    public function store(Request $request)
    {
        //dd($request);

    $input= $request->except('_token');
    $input['business_user_id']= "2";
    $input['clubber_id']= "4";
    $input['event_id'] = "3";
    $string = str_random(4);
    $input['guest_entry_code']= $string; 

    //dd($input);
    
    $gu = Guest::create($input);
    //dd($gu); 
    return redirect('/');
    
    }
}
