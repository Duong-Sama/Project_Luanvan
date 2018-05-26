<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    protected $table="chitietdonhang";
    public function donhang(){
    	return $this->belongsTo('App\chitietdonhang','madh','madh');
    }
    public function sanpham(){
    	return $this->hasMany('App\sanpham','masp','masp')
    }
}
