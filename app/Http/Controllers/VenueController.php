<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Input;*/
use App\City;
use App\Venue;
use App\Guest;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class VenueController extends Controller
{
    public function creategst()
    {
       // return("hai");
        return view('add_guest');
        
    }

    public function storeguest(Request $request)
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
    return redirect('/createguest');
    
    }


    public function create()
   	{
        
    /*$city = City::with('venues')->get();
    dd($city);
    */


    $city = City::lists('city_name','city_id');
    return view('venue.create_venue',compact('city'));
   	}


    public function store(Request $request)
    {
    $this->validate($request, [
        'venue_name' => 'required',
        'venue_phone_no'=>'required|min:10|integer',
        'venue_category' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'venue_city' => 'required',
        'venue_cover_img' => 'required',
        'venue_status' => 'required',
        'venue_card' => 'required',
        'venue_parking' => 'required',
        'venue_seats' => 'required',
        'venue_smoking' => 'required',
        'venue_address' => 'required',
    ]);

    $input= $request->except('_token');
    $input['user_id']=" 2 ";
    $input['created_by']=" 3 ";
    Venue::create($input); 
    return redirect('/showvenue');
    }

    
    public function show()
    {

   

    $ven= Venue::orderBy('venue_id')->join('cities','city_id', '=', 'venues.venue_city')
                                    ->select('cities.city_name' ,'venue_city','venue_id',
                                    'venue_name','venue_phone_no', 'venue_category', 
                                    'latitude','longitude','venue_address','venue_cover_img',
                                    'venue_status','user_id','venue_card','venue_parking',
                                    'venue_smoking','venue_seats' )->get();
   // dd($ven);
    return view('venue.show_venue',compact('ven'));
    }


    public function delete($id)
    {
    Venue::where('venue_id',$id)->delete();
    return redirect('/showvenue');
    }


    public function edit($id)
    {
	$ven=Venue::where("venue_id",$id)->first();
    $city = City::lists('city_name','city_id');
	return view('venue.update_venue',compact('ven','city'));
    }
    

    public function update(Request $request,$id)
    {   

    $this->validate($request, [
        'venue_name' => 'required',
        'venue_phone_no'=>'required|min:10|max:10|integer',
        'venue_category' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'venue_city' => 'required',
        'venue_cover_img' => 'required',
        'venue_status' => 'required',
        'venue_card' => 'required',
        'venue_parking' => 'required',
        'venue_seats' => 'required',
        'venue_smoking' => 'required',
        'venue_address' => 'required',
    ]);

    $input= $request->except('_token');
    $input['user_id']=" 2 ";
    $input['created_by']='3';
    //dd($input);
    Venue::where('venue_id',$id)->update($input);
    /*$ven=Venue::all();
    return view('venue.show_venue',compact('ven'));*/
    return redirect('/showvenue');
    }

}
