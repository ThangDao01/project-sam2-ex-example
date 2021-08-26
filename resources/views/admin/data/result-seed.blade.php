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
@foreach($list as $data)
    [
    'values' => '{{$data->values}}', <br>
    'words' => '{{$data->words}}',<br>
    'color' => '{{$data->color}}',<br>
    'video' => '{{$data->video}}',<br>
    'voice' => '{{$data->voice}}',<br>
    'images' => '{{$data->images}}',<br>
    'key' => '{{$data->key}}',<br>
    'createBy' => '{{$data->createBy}}',<br>
    'create_At' =>'{{$data->create_At}}'<br>
    'update_At' =>'{{$data->update_At}}'<br>
    ],<br>
@endforeach
</body>
</html>
