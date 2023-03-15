<?php

use App\Http\Controllers\ApiSendEmailController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorJoinTableController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AdminMiddleware;
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
//group middleware
Route::middleware([AdminMiddleware::class, 'auth'])->group(
    function () {

        Route::get('/create', [BookController::class, 'createViewPage'])->name('create.book');

        Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');
        //page update (edit)
        Route::get('/update/{id}', [BookController::class, 'updateViewPage'])->name('update.view'); //view logic
        Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('update.book'); //patch update book method
    }
);

//delete method
Route::delete('/delete/{id}', [BookController::class, 'deleteBook'])->name('delete.book');


//create category
Route::get('/create-category', [CategoryController::class, 'index'])->name('category.view'); //view logic
Route::post('/create-category', [CategoryController::class, 'create'])->name('category.create'); //view logic


//create author
Route::get('/create-author', [AuthorController::class, 'index'])->name('author.view'); //view logic
Route::post('/author-maked', [AuthorController::class, 'create'])->name('author.create');


//register
// Route::get('/register', [RegisterController::class, 'registerView'])->name('auth.register.view'); //view logic
// Route::post('/register/now', [RegisterController::class, 'register'])->name('auth.register');

// //login
// Route::get('/login', [LoginController::class, 'loginView'])->name('auth.login.view'); //view logic
// Route::post('/login/now', [LoginController::class, 'login'])->name('auth.login');

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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
