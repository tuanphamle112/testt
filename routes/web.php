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
///***///admin 

///***///User
///**Home
Route::get('/home',function(){
	return view('user/u_index');
});
///**Show Login form
Route::get('login','LoginController@index');
//**check admin or not
Route::post('login','LoginController@exe_login');
Route::get('admin',function(){
	return redirect('/users');
})->middleware('Login');
//Route::get('admin','LoginController@admin_re')->middleware('Login');

Route::get('logout','LoginController@logout');

Route::resource('users', 'DbexeController');
// Route::get('users/insert',function(){
// 	return view('insertusers');
// });