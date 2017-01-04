<?php

namespace App\Http\Controllers;

use App\Book;
use App\Trade;
use Auth;
use Illuminate\Http\Request;
use View;

class BookController extends Controller {

    public function display()
    {
        return view('welcome', [
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

    public function mybooks() {

        $mybooks = Book::where('user_id', '=', Auth::user()->id)->get();

        $mytrades = Trade::where('user_id', '=', Auth::user()->id)->get();
//        dd($mytrades);

        return View::make('books.mybooks', compact('mybooks', 'mytrades'));
    }

//    public function mytrades() {
//
//        return view('books.tradeOffers', [
//            'mytrades' => Trade::where('user_id', '=', Auth::user()->id)->get()
//        ]);
//    }

    public function addBookRequest(Request $request)
    {
        $book_id = $request['bookID'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $book = Book::find($book_id);
        $book_body = Book::find($book_id)->body;
        $book_title = Book::find($book_id)->title;

        if (!$book) {
            return null;
        }

        $user = Auth::user();

        $like = $user->trades()->where('book_id', $book_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Trade();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->book_id = $book->id;
        $like->book_title = $book_title;
        $like->book_body = $book_body;

        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }



}