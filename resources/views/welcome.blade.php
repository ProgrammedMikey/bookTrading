@extends('layouts.app')

@section('content')

<body>
    <header class="jumbotron hero-spacer">
        <h1>Book Trading Club</h1>
        <p>First rule of Book Trading Club is don't talk about Book Trading Club!</p>
    </header>


    <div class="row">
        <div class="col-lg-12">
            <h3>Latest Features</h3>
        </div>
    </div>
    <hr/>

    <div class="row text-center welcome-height">

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <p>
                        Catalogue your books online.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <p>See all books our user own.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <p>Request to borrow other users books.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <div class="caption">
                    <p>Easily manage books and requests from your dashboard.</p>
                </div>
            </div>
        </div>

    </div>
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h3><center>List of All Books</center></h3>
        </div>
    </div>
    <hr/>

    </body>

@endsection