<?php

namespace App\Http\Controllers;
use App\Models\produk;

class userprodukcontroller extends Controller{
    function index(){
            $data['list_produk'] = produk::all();
            return view('showhome', $data);
    }

// cari item menggunakan nama
    // function filter(){
    //     $nama = request('nama');
    //     $data['list_produk'] = produk::where('nama', 'like',"%$nama%")->get(); 
    //     $data['nama'] = $nama;
    //     return view('produk.index', $data);
    // }
// end

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = produk::where('nama', 'like',"%$nama%")->get(); 
        // $data['list_produk'] = produk::whereIn('stok',$stok)->get();
        $data['list_produk'] = produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = produk::where('stok', '<>', $stok )->get(); 
        // $data['list_produk'] = produk::whereNotIn('stok',$stok)->get();
        // $data['list_produk'] = produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = produk::whereNull('stok', )->get();
        // $data['list_produk'] = produk::whereNotNull('stok', )->get();
        // $data['list_produk'] = produk::whereDate('created_at', '2020-11-22')->get();
        // $data['list_produk'] = produk::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [1000])->whereYear('created_at', '2020')->get();
        $data['nama'] = $nama;
        return view('home', $data);
    }
}