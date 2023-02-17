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

Route::group([], function (){
    Route::get('/',[\App\Http\Controllers\Frontend\HomeController::class, 'index']);
    Route::resource('/products',\Frontend\ProductController::class);
    Route::get('/lien-he',[\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
    Route::get('/gioi-thieu',[\App\Http\Controllers\Frontend\AboutController::class,'index'])->name('about');
    Route::get('/news', [\App\Http\Controllers\Frontend\PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{slug}', [\App\Http\Controllers\Frontend\PostController::class, 'show'])->name('posts.show');
    Route::resource('/works',\Frontend\WorkController::class);
    Route::resource('pages',\Frontend\PageController::class);
    Route::post('/feedback',[\App\Http\Controllers\Frontend\FeedbackController::class,'store'])->name('feedback');
    Route::get('/stories', [\App\Http\Controllers\Frontend\ServiceController::class,'story']);
});

Route::get('/enterprise', function () {
    return view('From_3');
});
Route::get('/feedback', function () {
    return view('From_1');
});
Route::get('/alumni', function () {
    return view('From_2');
});
Route::post('/feedback',"\App\Http\Controllers\Frontend\StudentController@store")->name('feedback');
Route::post('/alumni',"\App\Http\Controllers\Frontend\AlumniController@store")->name('alumni');
Route::post('/enterprise',"\App\Http\Controllers\Frontend\EnterpriseController@store")->name('enterprise');

Route::get('/student/export', "\App\Http\Controllers\Frontend\StudentController@export" )->name('export');
Route::get('/alumni/export',"\App\Http\Controllers\Frontend\AlumniController@export")->name('export');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
