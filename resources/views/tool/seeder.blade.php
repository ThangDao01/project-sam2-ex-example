
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{$date}}
@foreach($list as $data)
    [<br>
    'FirstName' => '{{$data->FirstName}}', <br>
    'LastName' => '{{$data->LastName}}', <br>
    'Email' => '{{$data->Email}}', <br>
    'PhoneNumber' => '{{$data->PhoneNumber}}', <br>
    'PasswordHash' => '{{$data->PasswordHash}}', <br>
    'Salt' => '{{$data->Salt}}', <br>
    'Age' => '{{$data->Age}}', <br>
    'Role' => '{{$data->Role}}', <br>
    'Status' => '{{$data->Status}}', <br>
    'created_at' =>'{{$data->created_at}}',<br>
    'updated_at' =>'{{$data->updated_at}}'<br>
    ],<br>
@endforeach
</body>
</html>

