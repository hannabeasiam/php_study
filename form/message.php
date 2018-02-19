<?php
//get a value from the browser(actual URL) if i add ~php + '? name=hanna' it works too
$name = $_GET['name'];
$age = $_GET['age'];

echo 'Welcome to the variable :' .$name .' You are ' .$age .'years old. ';
?>