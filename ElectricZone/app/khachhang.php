<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
     protected $table="khachhang";
     public function Donhang(){
   		return $this->hasMany('App\donhang','makh','makh');
   	}
   	protected $fillable = [
        'makh', 'taikhoan', 'matkhau','chucvu'
    ];
    public $timestamps= false;
}
