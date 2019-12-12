<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

class RegController extends Controller
{
    //



public function index(){

		return view('registration.index');
	}




public function Register(Request $req){

 $user = new User();

        $user->username = $req->username;
  
        $user->password = $req->password;
        $user->type = $req->type;

//return response->json($user);
        if($user->save()){
           return redirect()->route('home.index');
            }else{
            return redirect()->route('reg.index');
        }
}

}



    