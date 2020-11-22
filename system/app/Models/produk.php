<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\model;

class produk extends Model{
    
    protected  $table = 'produk';

    function seller(){
        return $this->belongsTo( User::class, 'id_user');
    }
}