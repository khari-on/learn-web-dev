<?php
$myfile = fopen("resume.txt",'a') or die("unable to open this fille");

$txt = 'Name - Hari Prasath';

fwrite($myfile,$txt);

fclose($myfile);

?>