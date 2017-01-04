<br>
@foreach($mytrades as $trade)
    <div class="card col-md-3">
        <img src={{ $trade->book_body }} alt="Image" height="230" width="230" style="width:100%">
        <div class="container cardContainer">
            <p>{{ $trade->book_title }}</p>
        </div>
    </div>

@endforeach