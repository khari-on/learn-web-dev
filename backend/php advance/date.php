 <?php

// date(format,timestamp):

// $d=mktime(12,12,12,12,23,2022);
// $d=strtotime("tomorrow");
// echo date("d-m-Y l",$d);
    // echo date("l");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Welcome to our website</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sint asperiores aliquam doloremque libero maiores est voluptas, nihil eaque nulla a molestias? Perspiciatis et odio odit numquam itaque id facilis?</p>
<?php require 'dd.php';?>
<?php echo $x;?>
<h1>Welcome to our website </h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi sint asperiores aliquam doloremque libero maiores est voluptas, nihil eaque nulla a molestias? Perspiciatis et odio odit numquam itaque id facilis?</p>
</body>
</html>