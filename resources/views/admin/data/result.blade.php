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
<div style="background-color: black;color: white">copy đoạn này vào file .txt( nhớ lưu )</div>
<?php
   $start = 1;
?>
@foreach($data as $result)
    [
    'id' => '<?php
    ++$start;
    ?>',
    'values' => '{{$result->values}}',
    'words_vi' => '{{$result->words_vi}}',
    'words_en' => '{{$result->words_en}}',
    'values' => '{{$result->values}}',
    'voice_vi' => '{{$result->voice_vi}}',
    'voice_en' => '{{$result->voice_en}}',
    'images' => '{{$result->images}}',
    'key' => '{{$result->key}}',
    'createBy' => '{{$result->key}}',
    'created_at' => '{{$result->created_at}}',
    'updated_at' => '{{$result->updated_at}}',
    ],
@endforeach
<div style="background-color: black;color: white">bỏ dấu ,ở cuối cùng</div>

</body>
</html>
