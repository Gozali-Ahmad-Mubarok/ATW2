<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;

class HomeController extends Controller {

    function showberanda(){
        return view('beranda');
    }
  
    function showhome(){
        $dataa['list_kategori'] = kategori:: all();
        $data ['list_produk'] = produk:: all();
        return view('home', $data, $dataa);
    }

    function showLogin(){
        return view('Login');
    }

    function showregister(){
        return view('register');
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
    
    function  showit_shop_detail(produk $it_shop_detail){
        $data ['produk'] = $it_shop_detail;
        return view ('it_shop_detail', $data);
    
    }

}