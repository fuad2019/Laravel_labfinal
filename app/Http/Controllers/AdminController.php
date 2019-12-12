<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    //



    function reg(){

        return view('admin.adminreg');
    }

    function insert(Request $req){

        $user = new Admin();
      

  $user->name = $req->name;
  $user->email = $req->email;
  $user->contact = $req->contact;

  

        $user->password = $req->password;
        $user->type = $req->type;
       
        // $user->save();
        if($user->save()){
            return redirect()->route('home.index');

//return response->json()
        }else{
            return redirect()->route('admin.adminreg');
        }
    }

}
