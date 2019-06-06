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
<?php
include ("main_class.php");

echo $rectangle->width; // 0utput: 20
echo "<br>";
echo $rectangle->height; // 0utput: 10
echo "<br>";
echo $rectangle->getPerimeter(); // 0utput: 200
echo "<br>";
echo $rectangle->getArea(); // Output: 400
echo "<br>";
echo ("Your Rectangle: ". $rectangle->display());
?>
</body>
</html>