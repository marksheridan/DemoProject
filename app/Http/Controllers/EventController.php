<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;

class EventController extends Controller
{
    public function create()
    {
    	$events=Event::all();
    	return view('event.create_event');
    }

    public function store(Request $request)
    {
    	$input=$request->all();
    	Event::create($input);
    	return($input);
    }

    public function update(Request $request,$id)
    {
    	$input=$request->all();
    	Event::where('id',$id)->update($input);
    	return("Success");
    }
    
    public function delete($id)
    {
    	Event::where('id',$id)->delete();
    	return("Deleted");
    }

}
