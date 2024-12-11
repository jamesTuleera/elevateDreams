<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::view(     '/about', 'about')->name('about');
Route::view(      '/faqs', 'faqs')->name('faqs');
Route::view(     '/meet-our-team', view: 'faqs')->name(name: 'meet-our-team');


Route::group(['prefix' => 'immigration'], function () {
    Route::view(      '/immigration',  'services.immigration')->name('immigration');
    Route::view(      '/international-business-formation',  'services.international-business-formation')->name('business-formation');
});




// Route::get('/', function () {
//     return Inertia::render('Home');
// });

// Route::inertia('/about', 'About');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
