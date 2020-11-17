<?php

namespace App\Http\Controllers; 
use Auth;
use App\Models\User;
use App\Models\produk;
use App\Models\kategori;

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

    function showregister(){
        return view('register');
    }
    function storeregister(){
        $user =  new User; 
        $user->username =  request('username');
        $user->email =  request('email');
        $user->nama =  request('nama'); 
        $user->password =  request('password');
        $user->save(); 

    return redirect('Login')->with('success', 'data berhasil di tambahkan');                
}
}