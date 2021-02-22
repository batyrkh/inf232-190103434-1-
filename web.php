<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/testName', function () {
    return view('myPage');
});
Route::get('/name', function () {
    return "My name is Batyrkhan Ismagulov";
});
Route::get('/redirect-example', function () {
    return redirect('test');
});
Route::get('/post/{id}', function ($id) {
    return "My id is:".$id ; 
});

Route::get('/post/{id}/{name}', function ($id , $name) {
    return "My id is:".$id." And my name is ".$name ; 
});
Route::get('/post/{id}/{age?}', function ($id , $age = 12) {
    return "My id is:".$id." I am  ".$age ; 
});
Route::get('/user/{name?}' , function($name=null){
    return $name;
})->where('name','[a-zA-z]+');
