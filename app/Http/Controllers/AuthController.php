<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function adminlogin(){

         return view('auth.adminlogin');

     }
 
     public function store(Request $Request){
        
     $email = $Request['email'];
     $password = $Request['password'];
     

     if ($email=='lino@gmail.com' && $password=='lino'){
        return redirect()->route('admin.dashboard');
     } else {
        return redirect()->route('admin.login')->with('error', 'invalid credentials!');;
     }

     }
}
