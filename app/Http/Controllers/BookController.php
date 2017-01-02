<?php

namespace App\Http\Controllers;

use App\Book;
use Auth;
//use Illuminate\Http\Request;

class BookController extends Controller {

    public function display()
    {
        return view('books.mybooks', [
        'books' => Book::all()
        ]);
    }

    public function store()
    {

        $this -> validate(request(), [
            'title' => 'required',
            'body' => 'required'
    ]);

        $userId = Auth::user()->id;

        Book::forceCreate([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => $userId
        ]);

        return ['message' => 'Book Added!'];
    }


}