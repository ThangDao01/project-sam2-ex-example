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
<button id="upload_widget" class="cloudinary-button">Upload files</button>

<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>

<script type="text/javascript">
    var myWidget = cloudinary.createUploadWidget({
            cloudName: 'thangdao04',
            uploadPreset: 'ekcloudinary'
        }, (error, result) => {
            if (!error && result && result.event === "success") {
                // console.log('Done! Here is the image info: ', result.info);
                console.log(result.info.secure_url);
            }
        }
    )

    document.getElementById("upload_widget").addEventListener("click", function(){
        myWidget.open();
    }, false);
</script>
</body>
</html>
