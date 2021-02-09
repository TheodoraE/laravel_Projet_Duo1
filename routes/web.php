<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\BoArticleController;
use App\Http\Controllers\BoFooterController;
use App\Http\Controllers\BoHome1Controller;
use App\Http\Controllers\BoHome2Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Backoffice
Route::get('/backoffice', [BackController::class, 'index']);
Route::post('/add_link', [BackController::class, 'store']);

// BOHome1
Route::get('/bohome1', [BoHome1Controller::class, 'index']);
Route::post('/add_link', [BoHome1Controller::class, 'store']);

// BOHome2
Route::get('/bohome2', [BoHome2Controller::class, 'index']);
Route::post('/add_link', [BoHome2Controller::class, 'store']);


// BOArticle
Route::get('/boarticle', [BoArticleController::class, 'index']);
Route::post('/add_link', [BoArticleController::class, 'store']);

// BOFooter
Route::get('/bofooter', [BoFooterController::class, 'index']);
Route::post('/add_link', [BoFooterController::class, 'store']);