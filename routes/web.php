<?php

use App\Http\Controllers\addMemberController;
use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\timeTableController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userListController;
use App\Http\Controllers\UserOperation;
use App\Http\Controllers\BookController;
use App\Http\Controllers\dashboardController;
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

Route::group(['prefix' => 'admin'], function(){
Route::get('/', [timeTableController::class, 'index']);
    
});

Route::get('/borrow-req-Books', [BookController::class,'index'])->name('admin.books.index');
Route::get('/unapproved', [BookController::class,'unapproved'])->name('admin.books.unapproved');
Route::get('/approved',[BookController::class,'approved'])->name('admin.books.approved');
Route::post('/approve/{id}', [BookController::class,'approve'])->name('admin.books.approve');
Route::post('/unapprove/{id}',[BookController::class,'unapprove'])->name('admin.books.unapprove');

Route::get('/books-gride',[BookController::class,'displayBook'])->name('books.request');
Route::get('/books-borrow-req',[dashboardController::class,'requestBook'])->name('books.borrow.request');



Route::view('/listed-Books','admin/pages/listedBook');
Route::view('/damaged-Books','admin/pages/damagedBooks');
Route::view('/issued-Books','admin/pages/issuedBooks');
//Route::view('/borrow-req-Books','admin/pages/borrowReq');
Route::view('/addBook','admin/pages/addNewBook');
//Route::view('/books-gride','books-gride-view');

Route::view('/test','admin/test');



