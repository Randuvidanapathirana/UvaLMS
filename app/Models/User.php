<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public static function bookRequest($book_id)
    {
        $book_request = BookRequest::where('user_id')->orderBy('id' )->where('book_id', $book_id)->first();
        if (!is_null($book_request)) {
            return $book_request;
        }
        return null;
    }
    use HasFactory;
    public $timestamps = false; //update at times removed
}
