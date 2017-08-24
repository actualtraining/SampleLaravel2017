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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{nama?}',function($nama='default'){

    return view('hello',array('nama'=>$nama));
    //return view('hello')->with('nama',$nama);
});

Route::get('/sample',function(){
    $data = ['nama'=>'Erick Kurniawan','alamat'=>'jogja'];
    return view('hello')->with($data);
});