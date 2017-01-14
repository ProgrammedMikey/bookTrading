@extends('layouts.app')

@section('content')

<body>


    <header class="jumbotron hero-spacer depth" style="background-color: #8c8c8c; color: #000000;">
        <h1>Book Trading Club</h1>
        <p>First Rule of Book Trading Club is Don't Talk About Book Trading Club!</p>
    </header>


    <div class="row">
        <div class="col-lg-12">
            <h3>Latest Features</h3>
        </div>
    </div>
    <hr/>


    <div class="row text-center welcome-height" >

        <div class="col-md-3 col-sm-6 hero-feature">
                <div class="well depth greyBackground" style="min-height: 95px !important">
                    <p>
                        Catalogue your books online.</p>
                </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature ">
                <div class="well depth greyBackground" style="min-height: 95px !important">
                    <p>See all books our user own.</p>
                </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
                <div class="well depth greyBackground" style="min-height: 95px !important">
                    <p>Request to borrow other users books.</p>
                </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
                <div class="well depth greyBackground">
                    <p>Easily manage books and requests from your dashboard.</p>
                </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <h3>List of All Books</h3>
        </div>
    </div>
    <hr/>
        <div class="row">
            @if(!Auth::user())
                <p class="indentP">Please login or register to send trade.</p>
            @endif
        </div>
    @include('books.bookList')


    </body>

@endsection

<script>
var token = '{{Session:: token()}}';
var urlLike = '{{ route('like') }}';
</script>