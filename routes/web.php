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
Route::get('/plain/index', function () {
    return view('plain.index');
});
Route::get('/profile', function () {
    $products = \App\Models\Product::all();
    foreach ($products as $product) {
        echo $product->company->name;
    }
    return view('profile.index');
});


Auth::routes();
Route::get('/signup', function () {
    return view('signup.index');
});
Route::get('/home', 'HomeController@index')->name('home');
