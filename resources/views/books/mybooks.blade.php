@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h3>Add a book</h3>
            </div>
        </div>

        <bookform></bookform>



        <tabs>
            <tab name="Your Book List">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>List of All Your Books</h3>
                    </div>
                </div>

                @include('books.myBookList');
            </tab>

            <tab name="Your Trade Offers">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>List of All Your Trade Offers</h3>
                    </div>
                </div>
                @include('books.tradeOffers');
            </tab>
        </tabs>


    </div>
@endsection
