<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cauhinhsp extends Model
{
    protected $table="cauhinhsp";
    public function sanphan(){
    	return $this->belongsTo('App\sanpham','masp','masp');
    }
}
