@extends('layouts.app')

@section('content')
    <div class="container">

                @include('books.bookList')

        <bookform></bookform>


    </div>
@endsection
