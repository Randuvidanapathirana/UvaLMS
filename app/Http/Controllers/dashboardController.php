<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BookRequest;
use App\Models\students;



class dashboardController extends Controller
{

    public function requestBook(Request  $request)
    {
        $student = students::where('Stu_Id', $request->input('student_id'))->first();
        if(!is_null($student)){
            $stid = $student->Stu_Id;
            $stname = $student->First_Name;
        }
        $book_request = new BookRequest();
        $book_request->book_id = $request->input('book_id');
        $book_request->book_name = $request->input('book_name');
        $book_request->user_id = $stid;
        $book_request->user_name = $stname;
        $book_request->user_message = $request->input('user_message');
        $book_request->save();
        
        $book = Book::where('book_id', $request->input('book_id'))->first();
        if (!is_null($book)) {
            $book->status = 1;
            $book->save();
        }
        session()->flash('success', 'Book Request successfully sent !!');
        return redirect()->route('books.request');
    }

    

   
}
