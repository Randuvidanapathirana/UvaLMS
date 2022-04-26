<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function addNewBook(Request $request)
    {
        $book = new Book;
        $book->book_id = $request->input('bookid');
        $book->book_name = $request->input('bookName');
        $book->book_desc = $request->input('book-desc');
        $path = $request->input('bookImage');
        $book->book_image = "book-images/$path";
        $book->author_name = $request->input('authorName');
        $book->category_id = $request->input('categoryId');
        $book->save();
        return redirect()->back()->with('status','Book Added Successfully..!');
    }

    public function adminBookList()
    {
        $books = Book::all();
        return view('admin.pages.listedBook', compact('books'));
    }
}
