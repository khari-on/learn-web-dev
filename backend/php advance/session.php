<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <h1>Hello everyone</h1>
    <?php
    $_SESSION['username']="Sabari";
    $_SESSION['email']='sabarihari24@gmail.com';

    // var_dump($_SESSION);

    ?>
</body>
</html>