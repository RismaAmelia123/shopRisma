<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PakaianController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LogoController;

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
    return view('login');
});
Route::get('beranda', function(){
    return view('beranda');
})->middleware('auth:member');
Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth:web');

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/',[AuthController::class,'auth']);
Route::get('register',[MemberController::class,'register']);
Route::post('register',[MemberController::class,'create']);
Route::get('logout',[AuthController::class,'logout']);

Route::get('login/admin',[AuthController::class,'login_admin']);
Route::post('login/admin',[AuthController::class,'auth']);
Route::get('register/admin',[UserController::class,'register']);
Route::post('register/admin',[UserController::class,'create']);
Route::get('logout/admin',[AuthController::class,'logout_admin']);

Route::get('beranda',[PakaianController::class,'show']);
Route::get('product/detail/{id}',[PakaianController::class,'detail']);
Route::get('/',[PakaianController::class,'logo']);
Route::get('login/admin',[PakaianController::class,'logo1']);

Route::get('product',[ProductController::class,'show']);
Route::get('product/add',[ProductController::class,'add']);
Route::post('product/create',[ProductController::class,'create']);
Route::get('product/delete/{id}',[ProductController::class,'delete']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);

Route::get('member',[MemberController::class,'show']);
Route::get('member/delete/{id}',[MemberController::class,'delete']);

Route::get('admin',[UserController::class,'show']);
Route::get('admin/delete/{id}',[UserController::class,'delete']);

Route::get('slider',[SliderController::class,'show']);
Route::get('slider/add',[SliderController::class,'add']);
Route::post('slider/create',[SliderController::class,'create']);
Route::get('slider/delete/{id}',[SliderController::class,'delete']);
Route::get('slider/edit/{id}',[SliderController::class,'edit']);
Route::post('slider/update/{id}',[SliderController::class,'update']);

Route::get('logo',[LogoController::class,'show']);
Route::get('logo',[LogoController::class,'add']);
Route::post('logo/create',[LogoController::class,'create']);
Route::get('logo/delete/{id}',[LogoController::class,'delete']);
Route::get('logo/edit/{id}',[LogoController::class,'edit']);
Route::post('logo/update/{id}',[LogoController::class,'update']);