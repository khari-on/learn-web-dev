<?php


$str="banana";
$pattern='/ba(na){2}/i';
$x= preg_match($pattern,$str);

if($x=1){
    echo "Banana Found";
}else{
    echo "Banana Not Found";
}


?>