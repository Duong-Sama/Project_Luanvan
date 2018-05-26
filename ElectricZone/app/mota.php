<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mota extends Model
{
    protected $table="mota";
    public function sanphan(){
    	return $this->belongsTo('App\sanpham','masp','masp');
    }
}
