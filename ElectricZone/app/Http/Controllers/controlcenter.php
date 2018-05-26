<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\loginrequest;
class controlcenter extends Controller
{
    public function getIndex(){
    	return view('layouts.home.index');
    }
    public function getlistsp(){
    	return view('layouts.list_sp');
    }
    public function getlogin(){
    	return view('layouts.dangnhap');
    }
    public function postlogin(loginrequest $request){
    	return view('layouts.dangnhap');
    }
}
