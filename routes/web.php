<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactFormController;

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

Route::get('/contact', [PageController::class,'contact']);
Route::get('/about-us', [PageController::class,'about']);
Route::get('/services', [PageController::class,'services']);
Route::get('/courses', [PageController::class,'courses']);
Route::get('/admin', [PageController::class,'admin']);
Route::post('/change-password', [PageController::class,'change_password']);


Route::get('/course', [PageController::class,'course']);

Route::get('/', [PageController::class,'home']);

Route::get('/test-view', [PageController::class,'test_view']);

Route::post('/post-message', [ContactFormController::class,'post_message']);





