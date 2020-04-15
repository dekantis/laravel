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
Route::get('/home', function () {
    return view('welcome');
});
Route::post('/users', function () {
    return view('welcome');
});
Route::put('/users', function () {
    return view('welcome');
});
Route::match(['get', 'post'], '/users', function () {
    return view('welcome');
});
Route::match(['put', 'patch'], '/users', function () {
    return view('welcome');
});
Route::get('/news/{id}/{name}', function ($id, $name) {
    return response()->json([
        $id,
        $name
    ]);
});
Route::get('/news', function () {
    return response()->json([]);
});
