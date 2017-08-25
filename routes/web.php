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

/*Route::get('/hello/{nama?}',function($nama='default'){
    return view('hello',array('nama'=>$nama));
    //return view('hello')->with('nama',$nama);
});*/


Route::get('/hello/{nama?}','HelloController@index');
Route::get('/show','HelloController@show');
Route::post('/tampil','HelloController@HitungLuas')->name('tampil');

//routing database
Route::get('db', function () {
    //return DB::select('select * from todo_lists');
    //$todo_lists = DB::table('todo_lists')->orderBy('name')->get();
    //return json_encode($todo_lists);
    //$user = DB::table('todo_lists')->where('id',1)->first();
    //return json_encode($user);

    //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])
    //DB::table('todo_lists')->insert([["name"=>"Belajar Eloquent"]]);
    //DB::table('todo_lists')->where('id',1)->update(["name"=>"Belajar Update"]);
    DB::table('todo_lists')->where('id',1)->delete();
    return DB::table('todo_lists')->get();
});

Route::resource('todos', 'TodoListController');
/*Route::get('/sample',function(){
    $data = ['nama'=>'Erick Kurniawan','alamat'=>'jogja'];
    return view('hello')->with($data);
});*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
