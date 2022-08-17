<?php
// setcookie(name,value,expire,path)

$cookie_name="username";
$cookie_value="alex";

setcookie($cookie_name,$cookie_value,time()+86400,'/');

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
    <?php
// if(!isset($_COOKIE[$cookie_name])){
//     echo 'cookie named '.$cookie_name."is not set!";
// }else{
//  echo 'cookie  named '.$cookie_name ."is  set! <br>";
//  echo $_COOKIE[$cookie_name] . 'welcome';
// }
if(count($_COOKIE)>0){
    echo "cookies are enabled";
}else{
    echo "cookies are not enabled";
    
}

?>
</body>
</html>