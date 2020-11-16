<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    function showberanda(){
        return view('beranda');
    }

    

    function showhome(){
        return view('home');
    }

    function showLogin(){
        return view('Login');
    }

    function showit_shop_detail(){
        return view('it_shop_detail');
    }
    function showit_card (){
        return view('it_card');
    }
    
    function showproduk(){
        return view('produk');
    }
    function showkategori(){
        return view('kategori');
    }
}