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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/userview', [App\Http\Controllers\userView::class, "index"])->name('userview');
Route::get('/adduser', [App\Http\Controllers\userView::class, "addData"])->name('adduser');
Route::post('/addnewuser', [App\Http\Controllers\userView::class, 'newuser'])->name('addnewuser');
Route::get('/deleteuser/{id}', [App\Http\Controllers\userView::class, 'deleteuser'])->name('deleteuser');
Route::get('/updateuser/{id}', [App\Http\Controllers\userView::class, 'updateuser'])->name('updateuser');
Route::post('/updateuserdata', [App\Http\Controllers\userView::class, 'updateuserdata'])->name('updateuserdata');

Route::get('/pageview', [App\Http\Controllers\pageView::class, "index"])->name('pageview');
Route::get('/addpage', [App\Http\Controllers\pageView::class, "addpPage"])->name('addpage');
Route::post('/addnewpage', [App\Http\Controllers\pageView::class, 'newpage'])->name('addnewpage');
Route::get('/deletepage/{id}', [App\Http\Controllers\pageView::class, 'deletepage'])->name('deletepage');
Route::get('/updatepage/{id}', [App\Http\Controllers\pageView::class, 'updatepage'])->name('updatepage');
Route::post('/updatepagedata', [App\Http\Controllers\pageView::class, 'updatepagedata'])->name('updatepagedata');

Route::get('/enquiry', [App\Http\Controllers\Enquirycont::class, "index"])->name('enquiry');

Route::get('/faqlist', [App\Http\Controllers\faqList::class, "index"])->name('faqlist');
Route::get('/addfaq', [App\Http\Controllers\faqList::class, "addFaq"])->name('addfaq');
Route::post('/addnewfaq', [App\Http\Controllers\faqList::class, "addnewFaq"])->name('addnewfaq');
Route::get('/updatefaq/{id}', [App\Http\Controllers\faqList::class, 'updatefaq'])->name('updatefaq');
Route::post('/updatefaq', [App\Http\Controllers\faqList::class, 'updatefaqdata'])->name('updatefaqdata');

Route::get('/bannerlist', [App\Http\Controllers\bannerList::class, "index"])->name('bannerlist');
Route::get('/addbanner', [App\Http\Controllers\bannerList::class, "addBanner"])->name('addbanner');
Route::post('/addnewbanner', [App\Http\Controllers\bannerList::class, "addnewBanner"])->name('addnewbanner');
Route::get('/deletebanner/{id}', [App\Http\Controllers\bannerList::class, "deleteBanner"])->name('deletebanner');
Route::get('/updatebanner/{id}', [App\Http\Controllers\bannerList::class, "updateBanner"])->name('updatebanner');
Route::post('/updatebannerdata', [App\Http\Controllers\bannerList::class, "updateBannerData"])->name('updatebannerdata');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::post('/addpage', [App\Http\Controllers\pageView::class, "postpage"])->name('postpage');


Route::get('/industryview', [App\Http\Controllers\industry::class, "index"])->name('industryview');
Route::get('/addindustry', [App\Http\Controllers\industry::class, "addData"])->name('addindustry');
Route::post('/addnewindustry', [App\Http\Controllers\industry::class, 'newindustry'])->name('addnewindustry');
Route::get('/deleteindustry/{id}', [App\Http\Controllers\industry::class, 'deleteindustry'])->name('deleteindustry');
Route::get('/updateindustry/{id}', [App\Http\Controllers\industry::class, 'updateindustry'])->name('updateindustry');
Route::post('/updateindustrydata', [App\Http\Controllers\industry::class, 'updateindustrydata'])->name('updateindustrydata');

Route::get('/technologyview', [App\Http\Controllers\technology::class, "index"])->name('technologyview');
Route::get('/addtechnology', [App\Http\Controllers\technology::class, "addData"])->name('addtechnology');
Route::post('/addnewtechnology', [App\Http\Controllers\technology::class, 'newtechnology'])->name('addnewtechnology');
Route::get('/deletetechnology/{id}', [App\Http\Controllers\technology::class, 'deletetechnology'])->name('deletetechnology');
Route::get('/updatetechnology/{id}', [App\Http\Controllers\technology::class, 'updatetechnology'])->name('updatetechnology');
Route::post('/updatetechnologydata', [App\Http\Controllers\technology::class, 'updatetechnologydata'])->name('updatetechnologydata');

Route::get('/frameworkview', [App\Http\Controllers\framework::class, "index"])->name('frameworkview');
Route::get('/addframework', [App\Http\Controllers\framework::class, "addData"])->name('addframework');
Route::post('/addnewframework', [App\Http\Controllers\framework::class, 'newframework'])->name('addnewframework');
Route::get('/deleteframework/{id}', [App\Http\Controllers\framework::class, 'deleteframework'])->name('deleteframework');
Route::get('/updateframework/{id}', [App\Http\Controllers\framework::class, 'updateframework'])->name('updateframework');
Route::post('/updateframeworkdata', [App\Http\Controllers\framework::class, 'updateframeworkdata'])->name('updateframeworkdata');
