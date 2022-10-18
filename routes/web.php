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
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'],function(){
//------------------------------------------------life Test Routes Start------------------------------------------------ //
Route::get('/life-test-details',[HomeController::class,'life_test_details_index'])->name('life-test-details');
Route::get('/life-test-review',[HomeController::class,'life_test_review_index'])->name('life-test-review');
Route::get('/life-test',[HomeController::class,'life_test_index'])->name('life-test');
Route::post('/life-test', [HomeController::class, 'store_life_test'])->name('store_life_test');
Route::get('/life-total',[HomeController::class,'life_total_index'])->name('life-total');
//------------------------------------------------life Test Routes End------------------------------------------------ //


//------------------------------------------------My Test Routes Start------------------------------------------------ //
Route::get('/my-test',[HomeController::class,'my_test_index'])->name('my-test');
Route::get('/my-life-test-review/{id}',[HomeController::class,'my_life_test_review'])->name('my-life-test-review');
Route::get('/my-stress-test-review/{id}',[HomeController::class,'my_stress_test_review'])->name('my-stress-test-review');
//------------------------------------------------life Test Routes End------------------------------------------------ //


//------------------------------------------------Stress Test Routes Start------------------------------------------------//
Route::get('/stress-test-details',[HomeController::class,'stress_test_details_index'])->name('stress-test-details');
Route::get('/stress-test-review',[HomeController::class,'stress_test_review_index'])->name('stress-test-review');
Route::get('/stress-test',[HomeController::class,'stress_test_index'])->name('stress-test');
Route::post('/stress-test',[HomeController::class,'store_stress_test'])->name('store_stress_test');
Route::get('/stress-total',[HomeController::class,'stress_total_index'])->name('stress-total');
Route::get('/contact-us',[HomeController::class,'contact_us_index'])->name('contact-us');
//------------------------------------------------Stress Test Routes End------------------------------------------------//
});

//------------------------------------------------Admin Routes Start------------------------------------------------//
Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function(){
    Route::get('/dashboard',[AdminController::class,'dashboard_index'])->name('dashboard');
    Route::get('/users',[AdminController::class,'users_index'])->name('users');
    Route::get('/users/approve/{id}',[AdminController::class,'approve_user'])->name('aprrove-user');
    Route::get('/edit-user/{id}',[AdminController::class,'edit_users'])->name('edit-user');
    Route::post('/edit-user/{id}',[AdminController::class,'update_user'])->name('update-user');
    Route::get('/users/{id}',[AdminController::class, 'delete_user'])->name('delete-user');
    Route::get('/life-tests',[AdminController::class,'life_tests_index'])->name('life-tests');
    Route::get('/stress-tests',[AdminController::class,'stress_tests_index'])->name('stress-tests');
    Route::get('/stress-test-review/{id}',[AdminController::class,'stress_test_review'])->name('stress-test-review');
    Route::get('/stress-tests/{id}',[AdminController::class,'stress_test_delete'])->name('stress-test-delete');
    Route::post('/settings/update_profile/{id}',[AdminController::class,'update_profile'])->name('update-profile');
    Route::post('/settings/update_password/{id}',[AdminController::class,'update_password'])->name('update-password');
    Route::get('/life-test-review/{id}',[AdminController::class,'life_test_review'])->name('life-test-review');
    Route::get('/life-tests/{id}',[AdminController::class,'life_test_delete'])->name('life-test-delete');
    Route::get('/settings',[AdminController::class,'settings_index'])->name('settings');
});
//------------------------------------------------Admin Routes End------------------------------------------------ //
