<?php

namespace App\Http\Controllers;
use App\Models\User;

class Usercontroller extends Controller{
    function index(){
            $data['list_user'] = User::all();
            return view('user.index', $data);
    }
    function create(){
            return view('user.create');
    }
    function store(){
            $user =  new User; 
            $user->username =  request('username');
            $user->email =  request('email');
            $user->nama =  request('nama'); 
            $user->password =  request('password');
            $user->save(); 

        return redirect('user')->with('success', 'data berhasil di tambahkan');                
    }
    function show(User $user){ 
        $data['user'] = $user;
            return view('user.show', $data); 
    }
    function edit(User $user){ 
        $data['user'] = $user;
        return view('user.edit', $data); 
    }
    function update(User $user){   
        $user->username =  request('username');
        $user->email =  request('email');
        $user->nama =  request('nama');
        if (request('password')) $user->password = bcrypt(request('password')); 
        $user->save(); 

        return redirect('user') ->with('success', 'data berhasil di edit');
    }
    function destroy(User $user){
            $user->delete();

            return redirect('user') ->with('danger', 'data berhasil di hapus');
    }
}