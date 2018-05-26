<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhasx extends Model
{
    protected $table="nhasx";
    public function sanpham(){
    	return $this->hasMany('App\sanpham','manhasx','manhasx');
    }
    public $timestamps= false;
}
