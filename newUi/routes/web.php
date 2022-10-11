<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages/dashboard');
})->name('dashboard');

Route::get('/user/userview', [App\Http\Controllers\userController::class, "index"])->name('userview');
Route::get('/user/adduser', [App\Http\Controllers\userController::class, "addData"])->name('adduser');
Route::post('/user/addnewuser', [App\Http\Controllers\userController::class, 'newuser'])->name('addnewuser');
Route::get('/user/deleteuser/{id}', [App\Http\Controllers\userController::class, 'deleteuser'])->name('deleteuser');
Route::get('/user/updateuser/{id}', [App\Http\Controllers\userController::class, 'updateuser'])->name('updateuser');
Route::post('/user/updateuserdata', [App\Http\Controllers\userController::class, 'updateuserdata'])->name('updateuserdata');

Route::get('/page/pageview', [App\Http\Controllers\pageController::class, "index"])->name('pageview');
Route::get('/page/addpage', [App\Http\Controllers\pageController::class, "addpPage"])->name('addpage');
Route::post('/page/addnewpage', [App\Http\Controllers\pageController::class, 'newpage'])->name('addnewpage');
Route::get('/page/deletepage/{id}', [App\Http\Controllers\pageController::class, 'deletepage'])->name('deletepage');
Route::get('/page/updatepage/{id}', [App\Http\Controllers\pageController::class, 'updatepage'])->name('updatepage');
Route::post('/page/updatepagedata', [App\Http\Controllers\pageController::class, 'updatepagedata'])->name('updatepagedata');

Route::get('/enquiry/enquiryview', [App\Http\Controllers\enquiryController::class, "index"])->name('enquiry');

Route::get('/faq/faqview', [App\Http\Controllers\faqController::class, "index"])->name('faqlist');
Route::get('/faq/addfaq', [App\Http\Controllers\faqController::class, "addFaq"])->name('addfaq');
Route::post('/faq/addnewfaq', [App\Http\Controllers\faqController::class, "addnewFaq"])->name('addnewfaq');
Route::get('/faq/updatefaq/{id}', [App\Http\Controllers\faqController::class, 'updatefaq'])->name('updatefaq');
Route::post('/faq/updatefaq', [App\Http\Controllers\faqController::class, 'updatefaqdata'])->name('updatefaqdata');

Route::get('/banner/bannerlist', [App\Http\Controllers\bannerController::class, "index"])->name('bannerlist');
Route::get('/banner/addbanner', [App\Http\Controllers\bannerController::class, "addBanner"])->name('addbanner');
Route::post('/banner/addnewbanner', [App\Http\Controllers\bannerController::class, "addnewBanner"])->name('addnewbanner');
Route::get('/banner/deletebanner/{id}', [App\Http\Controllers\bannerController::class, "deleteBanner"])->name('deletebanner');
Route::get('/banner/updatebanner/{id}', [App\Http\Controllers\bannerController::class, "updateBanner"])->name('updatebanner');
Route::post('/banner/updatebannerdata', [App\Http\Controllers\bannerController::class, "updateBannerData"])->name('updatebannerdata');

Route::get('/industry/industryview', [App\Http\Controllers\industryController::class, "index"])->name('industryview');
Route::get('/industry/addindustry', [App\Http\Controllers\industryController::class, "addData"])->name('addindustry');
Route::post('/industry/addnewindustry', [App\Http\Controllers\industryController::class, 'newindustry'])->name('addnewindustry');
Route::get('/industry/deleteindustry/{id}', [App\Http\Controllers\industryController::class, 'deleteindustry'])->name('deleteindustry');
Route::get('/industry/updateindustry/{id}', [App\Http\Controllers\industryController::class, 'updateindustry'])->name('updateindustry');
Route::post('/industry/updateindustrydata', [App\Http\Controllers\industryController::class, 'updateindustrydata'])->name('updateindustrydata');

Route::get('/technology/technologylist', [App\Http\Controllers\technologyController::class, "index"])->name('technologyview');
Route::get('/technology/addtechnology', [App\Http\Controllers\technologyController::class, "addData"])->name('addtechnology');
Route::post('/technology/addnewtechnology', [App\Http\Controllers\technologyController::class, 'newtechnology'])->name('addnewtechnology');
Route::get('/technology/deletetechnology/{id}', [App\Http\Controllers\technologyController::class, 'deletetechnology'])->name('deletetechnology');
Route::get('/technology/updatetechnology/{id}', [App\Http\Controllers\technologyController::class, 'updatetechnology'])->name('updatetechnology');
Route::post('/technology/updatetechnologydata', [App\Http\Controllers\technologyController::class, 'updatetechnologydata'])->name('updatetechnologydata');

Route::get('/framework/frameworklist', [App\Http\Controllers\frameworkController::class, "index"])->name('frameworkview');
Route::get('/framework/addframework', [App\Http\Controllers\frameworkController::class, "addData"])->name('addframework');
Route::post('/framework/addnewframework', [App\Http\Controllers\frameworkController::class, 'newframework'])->name('addnewframework');
Route::get('/framework/deleteframework/{id}', [App\Http\Controllers\frameworkController::class, 'deleteframework'])->name('deleteframework');
Route::get('/framework/updateframework/{id}', [App\Http\Controllers\frameworkController::class, 'updateframework'])->name('updateframework');
Route::post('/framework/updateframeworkdata', [App\Http\Controllers\frameworkController::class, 'updateframeworkdata'])->name('updateframeworkdata');
