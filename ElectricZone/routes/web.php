<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\sanpham;
use App\loaisanpham;
use App\nhasx;
use App\cauhinhsp;
use App\mota;
use App\hinh;
// Route::get('/', function () {
//     return view('layouts.trangchu');
// });

Route::get('trangchu',[
	'as'=>'TrangChu',
	'uses'=>'controlcenter@getIndex'
]);
Route::get('listsp',[
	'as'=>'listsanpham',
	'uses'=>'controlcenter@getlistsp'
]);
Route::get('sanpham', function () {
    return view('layouts.sanpham');
});
Route::get('giohang', function () {
    return view('layouts.giohang');
});
Route::get('contact', function () {
    return view('layouts.contact');
});
Route::get('canhan', function () {
    return view('layouts.thanhvien.personal');
});
Route::get('about', function () {
    return view('layouts.thongtin');
});
Route::get('/checkDB', function ()
{
    dd(DB::connection()->getDatabaseName());
});
Route::get('login',[
	'as'=>'getlogin',
	'uses'=>'controlcenter@getlogin'
]);
Route::post('login',[
	'as'=>'postlogin',
	'uses'=>'controlcenter@postlogin'
]);
Route::get('view360', function () {
    return view('layouts.Slider.360');
});
Route::get('sanpham/{id}', function($id) {
    $data = DB::table('sanpham')
    ->join('loaisanpham','loaisanpham.maloaisp','=','loaisanpham.maloaisp')
    ->join('nhasx','nhasx.manhasx','=','sanpham.manhasx')
    ->join('cauhinhsp','cauhinhsp.masp','=','sanpham.masp')
    ->join('mota','mota.masp','=','sanpham.masp')
    ->where('sanpham.masp', $id)
    ->first();
    $sanpham=DB::table('sanpham')->limit(5)->inRandomOrder()->get();
    $hinhsp=DB::table("sanpham")
    ->join('hinh','hinh.masp','=','sanpham.masp')
    ->where('sanpham.masp',$id)
    ->get();
    //var_dump($hinhsp);
    return view('layouts.sanpham',compact('data','sanpham','hinhsp'));
});
Route::group(['prefix'=>'/hang'],function(){
		Route::get('sony', function () {
		$data = DB::table('sanpham')	
    	->join('nhasx','nhasx.manhasx','=','sanpham.manhasx')
    	->where('nhasx.tennhasx','=','sony')
    	->distinct()
    	->get();
	    return view('layouts.list_sp',compact('data'));
	});
		Route::get('apple', function () {
	    $data = DB::table('sanpham')
    	->join('nhasx','nhasx.manhasx','=','sanpham.manhasx')
    	->where('nhasx.tennhasx','=','apple')
    	->distinct()
    	->get();
    	//var_dump($data);
	    return view('layouts.list_sp',compact('data'));
	});
		Route::get('samsung', function () {
	    return 'samsung is not bad';
	});
});
Route::get('/',['as'=>'sp',function() {
	$sanpham=DB::table('sanpham')->get();
	$data=DB::table('sanpham')->get();
     return view('layouts.trangchu',compact('sanpham'));
}]);
// Route::get('quickview/{id}', function($id) {
// 	$loaisp=DB:table('sanpham')->where('sanpham.masp',$id)->first();
//     return view('layouts.quickview',compact('loaisp'));
// });
// Route::composer(['layouts.sanpham','layouts.quickview'],function($data){
// 	$sql = DB::table('sanpham')
//     ->join('loaisanpham','loaisanpham.maloaisp','=','loaisanpham.maloaisp')
//     ->join('nhasx','nhasx.manhasx','=','sanpham.manhasx')
//     ->where('sanpham.masp', $id)
//     ->first();
//     $data->with('sql',$sql);
// });