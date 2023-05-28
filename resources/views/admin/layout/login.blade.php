@extends('admin\layout\main')
@section('title')
Login
@endsection
@section('content')
<h4>Login</h4>
@if(Session()->has('success'))
    <span>{{session()->get('success')}}</span>
    @endif
<form action="" method="POST">
    @csrf
    <input type="text" name="email" >
    <input type="password" name="password" >
    <button type="submit">Login-up</button>
</form>
@endsection