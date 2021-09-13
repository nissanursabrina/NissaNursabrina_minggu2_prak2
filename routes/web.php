<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */
//Route::get('/', [PageController::class,'index']);
Route::get('/', [HomeController::class,'index']);
// Route::view('/', 'welcome');

/* Route::get('about', function () {
    echo "NIM &nbsp; &nbsp; : 2031710029 <br> NAMA  : Nissa Nursabrina";
}); */
//Route::get('about', [PageController::class,'about']);
Route::get('about', [AboutController::class,'about']);
// Route::view('about', "NIM &nbsp; &nbsp; : 2031710029 <br> NAMA  : Nissa Nursabrina");

/* Route::get('articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID ".$id;
}); */
//Route::get('articles/{id}', [PageController::class,'articles']);
Route::get('articles/{id}', [ArticlesController::class,'articles']);
// Route::view('articles', "Halaman Artikel dengan ID ".$id);

//Nissa Nursabrina_2031710029_22_MI2E
