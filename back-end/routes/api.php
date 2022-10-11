<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/user", [App\Http\Controllers\userView::class, 'getdata']);
Route::post("/user", [App\Http\Controllers\userView::class, 'postdata']);
// Route::put("/user", [App\Http\Controllers\userView::class, 'putdata']);

Route::get("/pages", [App\Http\Controllers\pageView::class, 'getpage']);
Route::post("/pages", [App\Http\Controllers\pageView::class, 'postpage']);

Route::get("/enquiry", [App\Http\Controllers\Enquirycont::class, 'getenquiry']);
Route::post("/enquiry", [App\Http\Controllers\Enquirycont::class, 'postenquiry']);

Route::get("/faqs", [App\Http\Controllers\faqList::class, 'getfaq']);
Route::post("/faqs", [App\Http\Controllers\faqList::class, 'postfaq']);

Route::get("/banner", [App\Http\Controllers\bannerList::class, 'getbanner']);
Route::post("/banner", [App\Http\Controllers\bannerList::class, 'postbanner']);
