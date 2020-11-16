<?php

namespace App\Http\Controllers; 
use Auth;

class AuthController extends Controller{

function showLogin(){
        return view('Login');
    }

    function LoginProcess(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('beranda')->with('success','Login berhasil');
        }else{
            return back()->with('danger', 'login gagal'); 
        }
    }
    function logout(){
        Auth::logout();
        return redirect('home');        
    }

    function register(){
        auth:: register();
        return redirect('registrasi');
    }

}