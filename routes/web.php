<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorJoinTableController;
use Illuminate\Support\Facades\App;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [App\Http\Controllers\BookController::class, 'home'])->name('home');

Route::get('/', [BookController::class, 'home'])->name('home');

//page create
Route::get('/create', [BookController::class, 'createViewPage'])->name('create.book');
Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');

//page update (edit)
Route::get('/update/{id}', [BookController::class, 'updateViewPage'])->name('update.view'); //view logic
Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('update.book'); //patch update book method

//delete method
Route::delete('/delete/{id}', [BookController::class, 'deleteBook'])->name('delete.book');


//create category
Route::get('/create-category', [CategoryController::class, 'index'])->name('category.view'); //view logic
Route::post('/create-category', [CategoryController::class, 'create'])->name('category.create');//view logic


//create author
Route::get('/create-author', [AuthorController::class, 'index'])->name('author.view'); //view logic
Route::post('/author-maked', [AuthorController::class, 'create'])->name('author.create');
