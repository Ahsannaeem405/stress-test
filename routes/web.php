<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Auth::routes();
Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index'])->name('home');
// Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'],function(){
// Live Test Routes Start //
Route::get('/live-test-details',[HomeController::class,'live_test_details_index'])->name('live-test-details');
Route::get('/live-test-review',[HomeController::class,'live_test_review_index'])->name('live-test-review');
Route::get('/live-test',[HomeController::class,'live_test_index'])->name('live-test');
Route::post('/live-test', [HomeController::class, 'store_live_test'])->name('store_live_test');
Route::get('/live-total',[HomeController::class,'live_total_index'])->name('live-total');
// Live Test Routes End //

Route::get('/my-products',[HomeController::class,'my_products_index'])->name('my-products');

// Stress Test Routes Start //
Route::get('/stress-test-details',[HomeController::class,'stress_test_details_index'])->name('stress-test-details');
Route::get('/stress-test-review',[HomeController::class,'stress_test_review_index'])->name('stress-test-review');
Route::get('/stress-test',[HomeController::class,'stress_test_index'])->name('stress-test');
Route::post('/stress-test',[HomeController::class,'store_stress_test'])->name('store_stress_test');
Route::get('/stress-total',[HomeController::class,'stress_total_index'])->name('stress-total');
Route::get('/contact-us',[HomeController::class,'contact_us_index'])->name('contact-us');
// Stress Test Routes End //
});
// Admin Routes Start //
Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function(){
    Route::get('/dashboard',[AdminController::class,'dashboard_index'])->name('dashboard');
    Route::get('/users',[AdminController::class,'users_index'])->name('users');
    Route::get('/live-tests',[AdminController::class,'live_tests_index'])->name('live-tests');
    Route::get('/stress-tests',[AdminController::class,'stress_tests_index'])->name('stress-tests');
    Route::get('/settings',[AdminController::class,'settings_index'])->name('settings');
    Route::post('/settings/update_profile/{id}',[AdminController::class,'update_profile'])->name('update-profile');
    Route::post('/settings/update_password/{id}',[AdminController::class,'update_password'])->name('update-password');
    Route::get('/live-test-review/{id}',[AdminController::class,'live_test_review'])->name('live-test-review');
    Route::get('/live-tests/{id}',[AdminController::class,'live_test_delete'])->name('live-test-delete');
});
// Admin Routes End //
