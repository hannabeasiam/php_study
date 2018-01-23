<?php 
$name = 'Hanna';
//$string_one = 'Hello, $name!'; //single quote can not read variable, only read as string - Hellop, $name!
$string_one = "Hello, $name!"; //double quote, php interpreter will expend variable
echo $string_one;
?>