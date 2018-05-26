<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
   protected $table="sanpham";
   public function chitietdonhang(){
   		return $this->belongsTo('App\chitietdonhang','masp','masp');
   }
   public function mau(){
   		return $this->hasMany('App\mau','masp','masp');
   }
   public function hinh(){
   		return $this->hasMany('App\hinh','masp','masp');
   }
   public function luotxem(){
   		return $this->hasMany('App\luotxem','masp','masp');
   }
   public function loaisanpham(){
   		return $this->belongsTo('App\loaisanpham','maloaisp','maloaisp');
   }
   	public function nhasx(){
   		return $this->belongsTo('App\nhasx','manhasx','manhasx');
   }
   public function cauhinhsp(){
      return $this->hasOne('App\cauhinhsp','masp','masp');
   }
   public function mota(){
      return $this->hasOne('App\mota','masp','masp');
   }
}
