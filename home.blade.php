{{--@extends('layouts.app')--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel = "stylesheet" href= "{{ url('css/fontawesome.min.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel = "stylesheet" href= "{{ url('css/bootstrap.min.css')}}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>

{{--start navbar--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="register">Register <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">

            </li>
        </ul>
    </div>
</nav>
{{--end navbar--}}



{{--star Register model--}}

{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>--}}

{{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="exampleModalLabel">Register</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<form action="home.blade.php" method="POST">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="recipient-name" class="col-form-label">Username :</label>--}}
                        {{--<input type="text" class="form-control" id="recipient-name" name="username" value="{{old('username')}}" placeholder="Input Your Name...">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="message-text" class="col-form-label">Password :</label>--}}
                        {{--<input type="password" class="form-control" name="password" id="password"  placeholder="Enter Password...">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="message-text" class="col-form-label">Email :</label>--}}
                        {{--<input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Enter Email...">--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-primary">Send </button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--end Register model--}}

@yield('contant')


{{--start footer--}}
<p class="footer">All Copy Rights &copy 2019 </p>
{{--end footer--}}
</body>
</html>