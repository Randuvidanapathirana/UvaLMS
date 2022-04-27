<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookRequest;


class dashboardController extends Controller
{

    public function requestBook(Request  $id)
    {
       $book = Book::where('id', $id)->get();

         if (!is_null($book)) {
           $book_request = new BookRequest();
           $book_request->book_id = $book->id;
           $book_request->book_name = "Boo1";
           $book_request->user_id = 10;
           $book_request->is_approved = 0;
           $book_request->user_name = "Moda randula";
           $book_request->user_message = "I want to borrow this book";
           $book_request->status = 1;
           $book_request->save();
            
            session()->flash('success', 'Book Request successfully sent !!');
            return redirect()->back();
        }else{
            session()->flash('error', 'No book found !!');
            return "error";
        }
    }
}
