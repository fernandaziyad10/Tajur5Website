<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RayonController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function(){
//     return view('index')->name('index-rayon');
// });
// Route::get('/', function(){
//     return view('home');
// });
Route::get('/', function(){
    return view('home');
});

Route::get('/index', [RayonController::class, 'index'])->name('index-rayon');
