<?php
// task - print 10 times this code


// $x=1000;
// while($x<100){
//     echo "Manandu";
//     echo "<br>";
// $x++;
// }

// $x=0;

// do{
//     echo "Manandu";
//     echo "<br>";
//     $x++;
// }while($x<100)

// $x=0;
// for ($x=10;$x<10;$x++){
//     echo "Manandu";
//      echo "<br>";
// };

// $color=array('a'=>'red','b'=>'green','c'=>'yellow');

// echo $color[0];
// $len = count($color);

// for($x=0 ; $x < $len ; $x++ ){
//    echo $color[$x];
//    echo "<br>";
// }

// foreach($color as $x => $value){
//     echo $x .'='. $value;
//     echo "<br>";
// }

for($x=0 ; $x<10;$x++){
    if($x==5){
        continue;
    };

    echo "The number is ".$x . "<br>";

}

?>
