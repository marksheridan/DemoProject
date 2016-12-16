<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\Input;*/
use App\City;
use App\Venue;
use App\Guest;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class VenueController extends Controller
{
   

    public function create()
   	{
        
    /*$city = City::with('venues')->get();
    dd($city);*/
    $city = City::where("city_status", "=","active")->lists('city_name','city_id');
    /*dd($city);
    $city = City::lists('city_name','city_id');*/
    return view('venue.create_venue',compact('city'));
   	}


    public function store(Request $request)
    {
    $this->validate($request, [
        'venue_name' => 'required|unique:venues',
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
    $input[ 'created_by' ] = Auth::User()->id;
    $input[ 'updated_by' ] = Auth::User()->id;
    $input[ 'user_id' ] = Auth::User()->id;
    Venue::create($input); 
    //dd($input);
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
       $city = City::where("city_status", "=","active")->lists('city_name','city_id');
	   return view('venue.update_venue',compact('ven','city'));
    }
    

    public function update(Request $request,$id)
    {   

    $this->validate($request, [
        'venue_name' => 'required|unique:venues',
        //'venue_phone_no'=>'required|min:10|max:10|integer',
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
        $input['user_id'] = Auth::user()->id;
        //dd($input);

        
        $input['updated_by'] = Auth::user()->id;

    
    Venue::where('venue_id',$id)->update($input);
    /*$ven=Venue::all();
    return view('venue.show_venue',compact('ven'));*/
    return redirect('/showvenue');
    }


}
