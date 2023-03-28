<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Http\Controllers\DB;

class DashboardController extends Controller
{
 
    public function dashboard(){

        // $contact = contact::orderBy('id','desc')->paginate(5);
        $contact = contact::all(); 
               return view('content.booktable', compact('contact'));

    }

    public function storecontact(Request $Request){

      $data = $Request->validate([
            'name' => 'required|unique:users',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'contact' => 'required',
        ]);
        
        $phonebook = contact::create($data);

        return redirect()->route('admin.dashboard')->with('success','Company has been created successfully.');

    }

    public function UpdateContact(Request $req){
     
           $user = contact::find($req->id);
           $user -> name = $req -> name;
           $user -> address = $req -> address;
           $user -> email = $req -> email;
           $user -> contact = $req -> contact;
           $user -> save();

           return redirect()->route('admin.dashboard');

                // // return redirect()->action([manageissuesController::class, 'show']);
        // ->with('success','Issue has been updated successfully.');
    }  
    
     public function GetContactId($id){

        $data=contact::where('id','=',$id)->first();

        return view('content.editbook',compact('data'));

     }

    Public function DeleteContact($id){

        contact::where('id','=',$id)->delete();

          return redirect()->route('admin.dashboard')->with('success','Company has been created successfully.');
          
        //     ->with('success','Issue has been deleted successfully.');

    }

    public function Delete($id){
   
        return $id;

    }

}
