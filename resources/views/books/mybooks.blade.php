@extends('layouts.app')

@section('content')
    <div class="container">

                @include('books.bookList')

        <bookform></bookform>
                {{--<form method="post" action="/books" @submit.prevent="onSubmit">--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="title" class="col-md-3 control-label">Title</label>--}}
                        {{--<div class="col-md-8">--}}
                        {{--<input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Title" v-model="title">--}}
                          {{--<br>--}}
                            {{--</div>--}}
                    {{--</div>--}}
                    {{--<br/>--}}

                    {{--<div class="form-group">--}}
                        {{--<label for="body" class="col-md-3 control-label">Book image</label>--}}

                        {{--<div class="col-md-8">--}}
                        {{--<input type="text" class="form-control" id="body" name="body" placeholder="Enter Book Image" v-model="body">--}}
                            {{--<br>--}}
                            {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-6 col-md-offset-4">--}}
                    {{--<button type="submit" class="btn btn-success">Submit</button>--}}
                        {{--</div>--}}

                {{--</form>--}}


    </div>
@endsection
