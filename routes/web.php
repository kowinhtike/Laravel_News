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


    Route::controller(NewsController::class)->group(function(){
        Route::get('/','index')->name('news-index')->middleware('checkSessionKey');
        Route::get('/addNews',"create")->name(("news-create"))->middleware('checkSessionKey');
        Route::post('/store',"store")->name(("news-store"))->middleware('checkSessionKey');
        Route::get('/show/{id}',"show")->name(("news-show"))->middleware('checkSessionKey');
        Route::get('/edit/{id}',"edit")->name(("news-edit"))->middleware('checkSessionKey');
        Route::post('/update/{id}',"update")->name(("news-update"))->middleware('checkSessionKey');
        Route::get('/destroy/{id}',"destroy")->name(("news-destroy"))->middleware('checkSessionKey');
        Route::get('/allusers',"allusers")->name('news-allusers')->middleware('checkSessionKey');
        Route::get('/profile/{email}',"profile")->name('news-profile')->middleware('checkSessionKey');
        Route::post('/comment/{id}/{name}',"comment")->name('news-comment')->middleware('checkSessionKey');

    });

Route::controller(NewsController::class)->group(function(){
    Route::get('/register','register')->name('news-register');
    Route::post('/signup','signup')->name('news-signup');
    Route::get('/login','login')->name('news-login');
    Route::post('/signin','signin')->name('news-signin');
    Route::get('/logout','logout')->name('news-logout');
});

