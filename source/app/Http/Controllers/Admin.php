<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class Admin extends Controller
{
    function login(Request $request){

    	$email=$request->email;
    	$password=$request->password;
    	// $user=new User();
    	// $user->name=$email;
    	// $user->email=$email;
    	// $user->password=bcrypt($password);
    	// $user->save();
        if(!$email && !$password){
            return view("login");
        }
        else{
            if(Auth::attempt(["email"=>$email,"password"=>$password])){
            // get user
            return redirect()->route("user");            
            }
            else{
                echo ("error");
            }
        }
       
    	

    }
    function user(Request $request){
         return view("user_list");
    }

}
