<?php

namespace App\Http\Controllers;
use App\Scout;

use Illuminate\Http\Request;

class ScoutController extends Controller
{
    //

function index(){

        $users = Scout::all();
       // $users = DB::table('users')->get();
        
    	return view('scout.index')->with('users', $users);
    }



 function details($id){

    	//your task finding student from array

    	$std = Scout::find($id);
       // return response()->json($std);
    	return view('scout.details')->with('std', $std);
    }


function delete($id){

    
       $std = Scout::find($id);

       //  return response()->json($std);
        return view('scout.delete')->with('std', $std);
    }



function destroy($id){

        //delete student from array and send the updated array in userlist
           $std = Scout::find($id);
            $std->delete(); 
        return redirect()->route('scout.index');
    }



function edit($id){

        //find student form array
  $std = Scout::find($id);
         // return response()->json($std);
        return view('scout.edit')->with('std', $std);
    }


function update(Request $req, $id){

        $user = Scout::find($id);
        $user->name = $req->name;
      $user->email = $req->email;
         $user->contact = $req->contact;

        $user->password = $req->password;
        $user->type = "scout";
        $user->save();

        return redirect()->route('scout.index');
    }

 function add(){

        return view('scout.add');
    }


     function insert(Request $req){

        $user = new Scout();
      
         $user->name = $req->name;
         $user->email = $req->email;
         $user->contact = $req->contact;

        $user->password = $req->password;
        $user->type = $req->type;
        // $user->save();
        if($user->save()){
            return redirect()->route('scout.index');

//return response->json()
        }else{
            return redirect()->route('scout.add');
        }
    }


}
