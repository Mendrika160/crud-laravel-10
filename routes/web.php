<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [ArticleController::class, 'index']);
Route::get('/article',[ArticleController::class, 'getAllArticle'])->name('article');
Route::get('/article/add',[ArticleController::class,'formAddArticle']);
Route::post('/article/add', [ArticleController::class, 'postArticle']);


Route::resource("/student",StudentController::class);