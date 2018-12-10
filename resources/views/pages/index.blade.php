@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid text-center">
        <h1>{{$title}}</h1>
        <p>This is how to learn laravel.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection