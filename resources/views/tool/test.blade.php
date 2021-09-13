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
<form class="create-gym" role="form">
    <input type="checkbox" class="checks" value="1">1
    <input type="checkbox" class="checks" value="2">2
    <input type="checkbox" class="checks" value="3">3
    <input type="checkbox" class="checks" value="4">3
    <input type="checkbox" class="checks" value="5">3
    <input type="checkbox" class="checks" value="6">3
    <input type="checkbox" class="checks" value="7">3
    <input type="checkbox" class="checks" value="8">3
    <input type="checkbox" class="checks" value="9">3
    <input type="checkbox" class="checks" value="10">3
    <button type="submit" onclick="getValue()" class="btn create-form-submit">Save gym</button>
</form>
<script>

    function getValue(){
        var checks = document.getElementsByClassName('checks');
        var str =',';
        for (let i = 0; i < checks.length; i++) {
            if (checks[i].checked === true){
                str += checks[i].value+',';
            }
        }
        alert(str);
    }
</script>
</body>
</html>
