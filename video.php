<?php
$files = scandir(__DIR__);
$videos = [];
if(count($files)){
    $videos = array_filter($files, function($file){
        return preg_match('/\.((mp4)|(avi))$/i', $file);
    });
}
?>
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
    <?php foreach($videos as $video){ ?>
        <video src="<?php echo $video; ?>" controls></video>
    <?php } ?>
</body>
</html>
