<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///////pages
Route::get('/how',[PagesController::class,'how']);
Route::get('/what',[PagesController::class,'what']);
Route::get('/stock',[PagesController::class,'stock']);
Route::get('/services',[PagesController::class,'services']);
Route::get('/indexfund',[PagesController::class,'indexfund']);
Route::get('/real',[PagesController::class,'real']);
Route::get('/fin',[PagesController::class,'fin']);
Route::get('/types',[PagesController::class,'types']);

Route::get('/stock_market',[PagesController::class,'stock_market']);
Route::get('/sector',[PagesController::class,'sector']);
Route::get('/indexes',[PagesController::class,'indexes']);
Route::get('/sp',[PagesController::class,'sp']);
Route::get('/dow',[PagesController::class,'dow']);
Route::get('/nas',[PagesController::class,'nas']);
Route::get('/latest',[PagesController::class,'latest']);
////////////stocks

Route::get('/growth',[PagesController::class,'growth']);
Route::get('/value',[PagesController::class,'value']);
Route::get('/dividend',[PagesController::class,'dividend']);
Route::get('/small',[PagesController::class,'small']);
Route::get('/large',[PagesController::class,'large']);
Route::get('/blue',[PagesController::class,'blue']);
Route::get('/howto',[PagesController::class,'howto']);
Route::get('/consumer',[PagesController::class,'consumer']);
Route::get('/tech',[PagesController::class,'tech']);
Route::get('/energy',[PagesController::class,'energy']);
Route::get('/health',[PagesController::class,'health']);
Route::get('/financial',[PagesController::class,'financial']);
Route::get('/to',[PagesController::class,'to']);
Route::get('/nft',[PagesController::class,'nft']);
Route::get('/top',[PagesController::class,'top']);
Route::get('/news',[PagesController::class,'news']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/phy',[PagesController::class,'phy']);
Route::get('/reviews',[PagesController::class,'review']);
Route::get('/room',[PagesController::class,'room']);
Route::get('/foo',[PagesController::class,'foo']);
Route::get('/contact',[PagesController::class,'contact']);
Route::get('/facebook',[PagesController::class,'facebook']);





































/////pages