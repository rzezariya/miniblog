@extends('admin\layout\main')
@section('title')
<h5>fhdsfhsdjfhsadjfhadsjslh</h5>
@endsection
@section('content')
<h4>signup</h4>
<form action="{{ route('sign.store') }}" method="POST">
    @if(Session()->has('success'))
    <span>{{session()->get('success')}}</span>
    @endif
    @csrf
    <input type="email" name="email" >
    <input type="name" name="name" >
    <input type="password" name="password" >
    <input type="password" name="co_password" >
    <button type="submit">sign-up</button>
</form>
@endsection