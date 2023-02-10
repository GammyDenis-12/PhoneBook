<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class DashboardController extends Controller
{
 
    public function dashboard(){

        $contact = contact::orderBy('id','desc')->paginate(5);
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

        
        // return redirect()->route('companies.index')->with('success','Company has been created successfully.');

         

    }

    public function UpdateContact(Request $req){
        $id=$req->id;
        $name=$req->name;
        $address=$req->address;
        $email=$req->email;
        $contact=$req->contact;

        contact::where('id','=',$id)->update([
           'name'=>$name,
           'address'=>$address,
           'email'=>$email,
           'contact'=>$contact

        ]);
        // return redirect()->action([manageissuesController::class, 'show']);
        // ->with('success','Issue has been updated successfully.');
    }

     public function GetContactId($id){

        $data=contact::where('id','=',$id)->first();
        return view('content.editbook',compact('data'));

     }

    Public function DeleteContact($id){

        contact::where('id','=',$id)->delete();
        //   return redirect()->action([manageissuesController::class, 'show'])
        //     ->with('success','Issue has been deleted successfully.');

    }

}
