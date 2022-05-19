<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookRequest;
use App\Models\Book;
use App\Models\studentBorrows;
use Carbon\Carbon;

class BookController extends Controller
{
    public function displayBook()
    {
        $books = Book::orderBy('book_id')->get();
        return view('books-gride-view', compact('books'));
    }

    public function index()
    {
        $books = BookRequest::orderBy('id')->paginate(10);
        $approved = false;
        return view('admin.pages.borrowReq', compact('books'));
    }
    public function unapproved()
    {
        $books = BookRequest::orderBy('id' )->where('is_approved', 0)->get();
        $approved = false;
        return view('admin.pages.borrowReq', compact('books', 'approved'));
    }

    public function approved()
    {
        $books = BookRequest::orderBy('id')->where('is_approved', 1)->get();
        $approved = true;
        return view('admin.pages.borrowReq', compact('books', 'approved'));
    }
    
       
    public function approve($id)
    {
        
        $book = BookRequest::find($id);
        if (!is_null($book)) {
            $book->is_approved = 1;
            $book->save();

            $newBorrow = new studentBorrows();
            $newBorrow->Book_Id = $book->book_id;
            $newBorrow->User_Id = $book->user_id;
            $newBorrow->Book_Name = $book->book_name;
            $newBorrow->Borrow_Date = $book->created_at;
            $newBorrow->Return_Date = Carbon::now();
            $newBorrow->New_Return_Date = $book->created_at;
            $newBorrow->status = 1;
            $newBorrow->save();
        }

        session()->flash('success', 'Book request has been approved !!');
        return back();
    }    

       
    public function unapprove($id)
    {
        
        $book = BookRequest::where('book_id', $id)->first();
        if (!is_null($book)) {
            $book->is_approved = 2;
            $book->save();
        }

        $books = Book::where('book_id', $id)->first();
        if (!is_null($books)) {
            $books->status = 0;
            $books->save();
        }

        session()->flash('success', 'Book has been unapproved !!');
        return back();
    }

    public function borrowConfirm($id)
    {
        $book = Book::where('book_id', $id)->first();
        return view('admin.pages.borrow-confirm', compact('book'));
    }

    public function issuedBook()
    {
        $books = studentBorrows::orderBy('book_id')->get();
        return view('admin.pages.issuedBooks', compact('books'));
    }

    public function returnBook($id)
    {
        $book = studentBorrows::where('Book_Id', $id)->first();
        if (!is_null($book)) {
            $book->status = 0;
            $book->save();
        }

        $books = Book::where('book_id', $id)->first();
        if (!is_null($books)) {
            $books->status = 0;
            $books->save();
        }
        return redirect()->back();
    }

    public function missingBook($id)
    {
        $books = Book::where('book_id', $id)->first();
        return view('admin.pages.payForBook', compact('books'));
    }
}
