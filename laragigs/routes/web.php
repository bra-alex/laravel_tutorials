<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// Listing
Route::get('/', [ListingController::class, 'index']);
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/create', [ListingController::class, 'create']);
Route::put('/listings/{listing}', [ListingController::class, 'update']);
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// User
Route::post('/users', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/login', [UserController::class, 'getLogin']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/register', [UserController::class, 'create']);



// Routes with id
/*
Route::get('/posts/{id}', function ($id) {
    return response(['Post' => $id])
        ->header('Content-Type', 'application/json');
});
*/

// Routes with id restriction
/*
Route::get('/posts/{id}', function ($id) {
    return response(['Post' => $id])
        ->header('Content-Type', 'application/json');
})->where('id', '\d+');

Route::get('/search', function (Request $request) {
    return $request->name . ' ' . $request->country;
});
*/
