@extends('home')
@section('contant')

<div class="container">
    <div class="row">
        <div class="col-md-8 center">

<form action="{{route('home')}}" method="POST" role="form">
    {{csrf_field()}}
    <legend>Register</legend>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Input Your Username...">
    </div>


    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Input Your Passwprd...">
    </div>


    <div class="form-group">
        <label for="password">Email</label>
        <input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="Enter Email...">    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>
        </div>
    </div>
</div>
    @endsection



