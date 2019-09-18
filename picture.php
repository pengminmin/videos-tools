<?php
$files = scandir(__DIR__);
function filt_pic($val){
    $pattern = '/\.((jpg)|(jpeg)|(png)|(gif))$/i';
    $result = preg_match($pattern, $val);
    return $result;
}
$pics = array_filter($files, 'filt_pic');
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
    <?php foreach($pics as $pic){ ?>
        <img src="<?php echo $pic; ?>" />
    <?php } ?>
</body>
</html>
