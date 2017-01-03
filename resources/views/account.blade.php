@extends('layouts.app')

@section('content')

    <section class="row">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your Account</h3></header>
            <form action="{{ route('account.save') }}" method="post">

                <div class="form-group">
                    <label for="name">Your Full Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="name">
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" value="{{ $user->city }}" id="city">
                </div>

                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" name="state" class="form-control" value="{{ $user->state }}" id="state">
                </div>

                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>

@endsection