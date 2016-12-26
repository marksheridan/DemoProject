<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function display()
    {
    	$users=User::all();
    	//dd($users);
    	return view('admin.main_admin',compact('users'));
    }

    public function createUser()
    {
    	return view('admin.create_user');
    }

    public function storeUser(Request $request)
    {
    	//dd($request->all());
    	$this->validate($request, [
    		'user_email' => 'required|unique:cities']);

    	$input=$request->except('_token');
    	User::create($input);
    	return("THANK YOU");
    }

    public function mainpage()
    {

        $users=User::events();
        /*foreach ($users as $user) {
            $user['t_events']=count($user->event);
        }
        dd($users->all());*/
        return view('admin.main_admin',compact('users'));
    }
}
