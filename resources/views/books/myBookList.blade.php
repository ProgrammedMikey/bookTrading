<br>
@foreach($mybooks as $book)
<div class="card col-md-3 backColor depth">
    <img src={{ $book->body }} alt="Image" height="230" width="230" style="width:100%">
    <div class="container cardContainer">
        <p>{{ $book->title }}</p>
    </div>
</div>

@endforeach