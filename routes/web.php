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
Route::post('/add_linkHeader', [BackController::class, 'store']);
Route::post('/delete-linkHeader/{id}', [BackController::class, 'destroy']);
Route::get('/show-link/{id}', [BackController::class, 'show']);

// BOHome1
Route::get('/bohome1', [BoHome1Controller::class, 'index']);
Route::post('/add_linkHome1', [BoHome1Controller::class, 'store']);
Route::post('/delete-linkHome1/{id}', [BoHome1Controller::class, 'destroy']);
Route::get('/show-home1/{id}', [BoHome1Controller::class, 'show']);

// BOHome2
Route::get('/bohome2', [BoHome2Controller::class, 'index']);
Route::post('/add_linkHome2', [BoHome2Controller::class, 'store']);
Route::post('/delete-linkHome2/{id}', [BoHome2Controller::class, 'destroy']);
Route::get('/show-home2/{id}', [BoHome2Controller::class, 'show']);

// BOArticle
Route::get('/boarticle', [BoArticleController::class, 'index']);
Route::post('/add_linkArticle', [BoArticleController::class, 'store']);
Route::post('/delete-linkArticle/{id}', [BoArticleController::class, 'destroy']);
Route::get('/show-card/{id}', [BoArticleController::class, 'show']);

// BOFooter
Route::get('/bofooter', [BoFooterController::class, 'index']);
Route::post('/add_linkFooter', [BoFooterController::class, 'store']);
Route::post('/delete-linkFooter/{id}', [BoFooterController::class, 'destroy']);
Route::get('/show-foot/{id}', [BoFooterController::class, 'show']);