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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/test', function () {
    return view('test');
  });
  Route::post('/test2', function () {
    return view('test2');
  });

  use Illuminate\Support\Facades\Auth;
  Route::post('logou', function () {
      Auth::logout();
     return Redirect::to('login');
  });  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
