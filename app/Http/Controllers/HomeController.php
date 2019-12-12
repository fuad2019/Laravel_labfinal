<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //




     function index(Request $request){



    	if($request->session()->has('name')){
    		return view('home.index');
    	}else{
    		return redirect('/login');
    	}

    }
}



