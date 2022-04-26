<?php

use App\Http\Controllers\addMemberController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\timeTableController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userListController;
use App\Http\Controllers\UserOperation;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', [timeTableController::class, 'index']);
    Route::view('/test','admin/test');
    Route::post('/newBook',[bookController::class, 'addNewBook'])->name('book.add_newbook');
});

// Route::get('/admin', [timeTableController::class, 'index']);
Route::get('/listed-Books',[bookController::class, 'adminBookList']);

Route::view('/damaged-Books','admin/pages/damagedBooks');
Route::view('/issued-Books','admin/pages/issuedBooks');
Route::view('/borrow-req-Books','admin/pages/borrowReq');
Route::view('/addBook','admin/pages/addNewBook');

Route::view('/books-gride','books-gride-view');
Route::view('/subject-books','sub-books');





