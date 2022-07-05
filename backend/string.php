<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <h1>String & String Function</h1>
   
    <?php
//     $greets="10";
//  echo $greets;
//  echo "<br>";
//  var_dump($greets);

 //string functions:
 //strlen()-used to identifiy the lenght of the string;
//  $para=" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores temporibus laudantium molestias quaerat quisquam aliquam voluptate officiis, ratione illo ipsa obcaecati veritatis sunt at magni! Adipisci eaque necessitatibus voluptates natus.";
//  echo "<br>";

// echo  strlen($para);


//str_word_count-- cpunt the no of words in paragraph;


//  $para=" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores temporibus laudantium molestias quaerat quisquam aliquam voluptate officiis, ratione illo ipsa obcaecati veritatis sunt at magni! Adipisci eaque necessitatibus voluptates natus.";
//  echo "<br>";

// echo  str_word_count($para);


//strrev()-  reverse the string
// $greets="Vijay Kumar";

// echo $greets;
// echo "<br>";
// echo strrev($greets);

//strpos()- identify the pos of the string;
//  $para="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores temporibus laudantium molestias quaerat quisquam aliquam voluptate officiis, ratione illo ipsa obcaecati veritatis sunt at magni! Adipisci eaque necessitatibus voluptates natus.";
//  echo "<br>";

// echo  strpos($para,'officiis');

// str_replace()-replacing a string
 $para="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores temporibus laudantium molestias quaerat quisquam aliquam voluptate officiis, ratione illo ipsa Lorem obcaecati veritatis sunt at magni! Adipisci eaque necessitatibus voluptates natus.
 Lorem";
 echo "<br>";

echo  str_replace("Lorem","Hari",$para);


?>
</body>
</html>