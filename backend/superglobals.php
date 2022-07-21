<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action=" <?php
   echo  $_SERVER['PHP_SELF'];
    ?> " 
    method='get' autocomplete="off">
<label for="name">Name:</label>
<input type="text" id="name"  name="userName">
    <input type="submit" value="Sing In">
    </form>

<?php
// ECHO $_SERVER['REQUEST_METHOD'];
if($_SERVER['REQUEST_METHOD']==='GET'){
    $name=$_GET['userName'];

    if(empty($name)){
        echo "Your Name is Empty";
    }else{
        echo "Your Name is $name";
    }
}

?>

</body>
</html>





<?php
//$GLOBALS

// $x=12;//global

// function gg(){
//     $x=13;//local
// };

// $y=13;//global

// var_dump($GLOBALS['x'])

// ECHO $_SERVER['SERVER_PORT'];

// var_dump($_SERVER);
?>