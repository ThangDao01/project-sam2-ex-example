<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .text-danger{
            color: red;
        }
        .alert-danger{
            color: red;
        }
        .alert-success{
            color: greenyellow;
        }
    </style>
</head>
<body>
@if(Session::has('message'))
    <p class=" alert alert-{{ Session::get('type-message') }}">{{ Session::get('message') }}</p>
@endif



<form action="/login" method="post">
    @csrf
<input type="text" placeholder="Email" name="Email"><br>
<input type="password" placeholder="password" name="password"><br>
    <button type="submit">Login</button><br>
</form>
</body>
</html>
