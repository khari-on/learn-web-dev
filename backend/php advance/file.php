<?php

// echo readfile("hari.docx")
$x=
$myfile=fopen('Hari - Resumes.pdf','r') or die("unable to open");

echo  fread($myfile,filesize("Hari - Resumes.pdf"));

// while(!feof($myfile)){
//     echo fgets($myfile) . "<br>";
// }

fclose($myfile);

?>