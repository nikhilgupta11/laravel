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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/userview', [App\Http\Controllers\userView::class, "index"])->name('userview');
Route::get('/adduser', [App\Http\Controllers\userView::class, "addData"])->name('adduser');

Route::get('/pageview', [App\Http\Controllers\pageView::class, "index"])->name('pageview');
Route::get('/addpage', [App\Http\Controllers\pageView::class, "addpPage"])->name('addpage');

Route::get('/enquiry', [App\Http\Controllers\Enquirycont::class, "index"])->name('enquiry');

Route::get('/faqlist', [App\Http\Controllers\faqList::class, "index"])->name('faqlist');
Route::get('/addfaq', [App\Http\Controllers\faqList::class, "addFaq"])->name('addfaq');

Route::get('/bannerlist', [App\Http\Controllers\bannerList::class, "index"])->name('bannerlist');
Route::get('/addbanner', [App\Http\Controllers\bannerList::class, "addBanner"])->name('addbanner');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::post('/addpage', [App\Http\Controllers\pageView::class, "postpage"])->name('postpage');
