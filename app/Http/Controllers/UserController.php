<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function validarteLogin(Request $request){

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if( Auth::attempt( $request->only( array('email', 'password')))){
            return redirect('/inicio');
        }else{
            return redirect()->back()->withErrors(['Error de Login', 'The Message']);   
        }
    }

    public function logoutLogin(){
        Auth::logout();

        return redirect('/');
    }
}