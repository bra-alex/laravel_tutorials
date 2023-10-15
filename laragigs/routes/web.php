<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes with id
/*
Route::get('/posts/{id}', function ($id) {
    return response(['Post' => $id])
        ->header('Content-Type', 'application/json');
});
*/

// Routes with id restriction
Route::get('/posts/{id}', function ($id) {
    return response(['Post' => $id])
        ->header('Content-Type', 'application/json');
})->where('id', '\d+');

Route::get('/search', function (Request $request) {
    return $request->name . ' ' . $request->country;
});
