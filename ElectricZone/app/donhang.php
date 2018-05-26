<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table="donhang";
    public function khachang(){
    	return $this->belongsTo('App\khachhang','makh','makh');
    }
    public function chitietdonhang(){
    	return $this->hasOne('App\chitietdonhang','madh','madh');
    }
}
