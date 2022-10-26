@extends('layouts.app2')

@section('content')     
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">Ini Home</p>
        </div>
        <div class="card-body">
            @auth
            <p>Welcome <b>{{ Auth::user()->name }}</b></p>
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            @endauth
            @guest
            <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            <a class="btn btn-info" href="{{ route('register') }}">Register</a>
            @endguest
        </div>
    </div>
@endsection