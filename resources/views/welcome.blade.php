<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       <body>
       @if(Session()->has('success'))
    <span>{{session()->get('success')}}</span>
    @endif
        <form action="{{route('index')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <input type="file" name="file" id="">
            <button type="submit">dsfsdf</button>
        </form>

        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button>logout</button>
        </form>
       
       </body>
</html>
