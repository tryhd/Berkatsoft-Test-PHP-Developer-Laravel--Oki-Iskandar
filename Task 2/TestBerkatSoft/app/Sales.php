<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //
    protected $table='sale';
    protected $fillable=['tanggal','id_cust','id_produk','total_item'];

    function getCustomer(){
        return $this->belongsTo('App\Customer','id_cust','id');
    }

    function getProduk(){
        return $this->belongTo('App\Produk','id_produk','id');
    }
}
