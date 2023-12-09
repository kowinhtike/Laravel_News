<?php

use App\Http\Controllers\NewsController;
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

// Route::get('/', function () {
//     return view('news.index');
// });


Route::controller(NewsController::class)->group(function(){
    Route::get('/','index')->name("news-index");
    Route::get('/addNews',"create")->name(("news-create"));
    Route::post('/store',"store")->name(("news-store"));
    Route::get('/show/{id}',"show")->name(("news-show"));
    Route::get('/edit/{id}',"edit")->name(("news-edit"));
    Route::post('/update/{id}',"update")->name(("news-update"));
    Route::get('/destroy/{id}',"destroy")->name(("news-destroy"));
    Route::get('/register','register')->name('news-register');
    Route::post('/signup','signup')->name('news-signup');
    Route::get('/login','login')->name('news-login');
    Route::post('/signin','signin')->name('news-signin');
    Route::get('/logout','logout')->name('news-logout');
});
