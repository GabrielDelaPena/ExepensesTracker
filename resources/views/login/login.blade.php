@extends('layout.layout')

@section('content')
<link rel="stylesheet" href="{{ url('css/login.css') }}">
<div class="login_container">
    <form action="">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <div class="btn_container_login">
            <button type="submit">Login</button>
            <button>Register</button>
        </div>
    </form>
</div>
@endsection