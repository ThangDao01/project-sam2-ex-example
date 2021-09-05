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
<form action="/register" method="post">
    @csrf
    <input type="text" placeholder="FirstName" name="FirstName"><br>
    @error('FirstName')
    <div class="text-danger"> * {{$message}}</div>
    @enderror
    <input type="text" placeholder="LastName" name="LastName"><br>
    @error('LastName')
    <div class="text-danger"> * {{$message}}</div>
    @enderror
    <input type="text" placeholder="Email" name="Email"><br>
    @error('Email')
    <div class="text-danger"> * {{$message}}</div>
    @enderror
    <input type="text" placeholder="PhoneNumber" name="PhoneNumber"><br>
    @error('PhoneNumber')
    <div class="text-danger"> * {{$message}}</div>
    @enderror
    <input type="password" placeholder="password" name="password"><br>
    @error('password')
    <div class="text-danger"> * {{$message}}</div>
    @enderror
    <input type="password" placeholder="Password Confirmation" name="password_confirmation"><br>
    @error('password_confirmation')
    <div class="text-danger"> * {{$message}}</div>
    @enderror
    <input type="text" placeholder="Age" name="Age"><br>
    @error('Age')
    <div class="text-danger"> * {{$message}}</div>
    @enderror
    <button type="submit">Submit</button><br>
    <button type="reset">Reset</button><br>
</form>
</body>
</html>
