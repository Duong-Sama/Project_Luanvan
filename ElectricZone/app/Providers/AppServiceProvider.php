<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\sanpham;
use App\loaisanpham;
use App\nhasx;
use App\cauhinhsp;
use App\mota;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->Composer('layouts.quickview',function($data){
            $sql=sanpham::all();
            $data->with('sql',$sql);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
