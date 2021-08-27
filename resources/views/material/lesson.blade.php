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
    [<br>
    'lessonName' => 'Learning {{$data->key}}  {{$data->values}}',<br>
    'courseId' => '{{$id}}',<br>
    'listMaterialId'=> '1-2-3-4-5',<br>
    'dataSupportId' => '{{$data->id}}',<br>
    'status'=> 1,<br>
    'created_at' => Carbon::now(),<br>
    'updated_at' => Carbon::now()<br>
    ],<br>
@endforeach
</body>
</html>
