<?php

namespace App\Http\Controllers;
use App\GeneralUser;

use Illuminate\Http\Request;

class GeneraluserController extends Controller
{
    //

function index(){

        $users = GeneralUser::all();
       // $users = DB::table('users')->get();
        
    	return view('guser.index')->with('users', $users);
    }



 function details($id){

    	//your task finding student from array

    	$std = GeneralUser::find($id);
       // return response()->json($std);
    	return view('guser.details')->with('std', $std);
    }


function delete($id){

    
       $std = GeneralUser::find($id);

       //  return response()->json($std);
        return view('guser.delete')->with('std', $std);
    }



function destroy($id){

        //delete student from array and send the updated array in userlist
           $std = GeneralUser::find($id);
            $std->delete(); 
        return redirect()->route('guser.index');
    }



function edit($id){

        //find student form array
  $std = GeneralUser::find($id);
         // return response()->json($std);
        return view('guser.edit')->with('std', $std);
    }


function update(Request $req, $id){

        $user = GeneralUser::find($id);
        $user->name = $req->name;
      $user->email = $req->email;
         $user->contact = $req->contact;

        $user->password = $req->password;
        $user->type = "generaluser";
        $user->save();

        return redirect()->route('guser.index');
    }

 function add(){

        return view('guser.add');
    }


     function insert(Request $req){

        $user = new GeneralUser();
      
         $user->name = $req->name;
         $user->email = $req->email;
         $user->contact = $req->contact;

        $user->password = $req->password;
        $user->type = $req->type;
        // $user->save();
        if($user->save()){
            return redirect()->route('guser.index');

//return response->json()
        }else{
            return redirect()->route('guser.add');
        }
    }


}
