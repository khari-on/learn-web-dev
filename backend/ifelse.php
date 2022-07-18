<?php

$x=2;

// if($x<5){
//     echo "The value is less than 5,value = ".$x;
// }elseif($x<10){
//     echo "The value is less than 10 but greater than 5,value = ".$x;

// }elseif($x<20){
//     echo "The value is less than 20 but greater than 10,value = ".$x;

// }else{
//    echo "The value is equal to 20 or greater than 20 , value = ".$x;
// }

$x='grey';
switch($x){
    case 'blue':
    echo "color is blue";
    break;

    case 'red':
    echo "color is red";
  
    break;

    default:
    echo "color not found";

}


?>