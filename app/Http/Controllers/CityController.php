<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Venue;
use App\User;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;


class CityController extends Controller
{

   	public function create()
   	{
   	    return view('city.create_city');
   	}

    public function store(Request $request) 
    {
        $this->validate($request, [
            'city_name' => 'required|unique:cities',
        
        ]);
        $input = $request->all();
        $input[ 'created_by' ] = Auth::User()->id;
        City::create($input);
        $city=City::all();
        //dd($city);
        return view('city.show_city',compact('city'));
    }


    public function delete($id)
    {
        if(Venue::where('venue_city',$id)->first())
        {
            return("not possible its been used in venue ");
        }

       	City::where('city_id',$id)->delete();
        $city=City::all();
        return view('city.show_city',compact('city'));
    
    }


    public function show()
    {
        $city=City::all();
        return view('city.show_city',compact('city'));
    }

    public function edit($id)
    {
	$city = City::where('city_id',$id)->first();
    //dd($city);
    return view('city.update_city',compact('city'));
    }


    public function update(Request $request,$id)
    {
    $this->validate($request, [
            'city_name' => 'unique:cities',
        
    ]);

    $input = $request->only(['city_name', 'city_status', 'city_tier']);
    $input['created_by']= " 2 ";
    City::where("city_id",$id)->update($input);
    $city=City::all();
    return view('city.show_city',compact('city'));
    }

}
