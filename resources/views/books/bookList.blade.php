<br>
@foreach($books as $book)
 <div class="card col-md-3 backColor depth" data-postid="{{ $book->id }}">
     <img src={{ $book->body }} alt="Image" height="230"  width="230" style="width:100%">
     <div class="container cardContainer">
         <p>{{ $book->title }}</p>
         @if(Auth::user())
         <div class="btn-group">
         <button type="button" class="btn btn-default like">{{ Auth::user()->trades()->where('book_id', $book->id)->first() ? Auth::user()->trades()->where('book_id', $book->id)->first()->like == 1 ? 'Pending!' : 'Offer to trade' : 'Offer to trade' }}</button>
             {{--<button type="button" class="btn btn-default like"> dom dom dom</button>--}}
             </div>
         @endif
     </div>
 </div>

 @endforeach
