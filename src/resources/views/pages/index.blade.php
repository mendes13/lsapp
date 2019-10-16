@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">Welcome to Laravel</h1>
        <p class="lead">This is the laravel application from the "Laravel From Scratch" Youtube series</p>
        <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
    </div>
@endsection
