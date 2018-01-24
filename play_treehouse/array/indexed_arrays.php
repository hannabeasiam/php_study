<?php
$learn = array('Conditionals','Arrays','Loops');

//add array element
$learn[] = 'Add new array Element';
//$learn = 'Add new array Element'; //this will delete all array, overwrite array with one value

//other way to add array element  array_push() function
array_push($learn, 'Funtions','Forms','objects');

//array_unshift() funtion
array_unshift($learn, 'become first element'); 

//***remove array elements
echo 'you removed' .array_shift($learn); //this only remove one, index zero element

echo 'you also removed ' .array_pop($learn); //this only remove one, last element remove

//other funtions, updated array keys, but this unset remove key as well. if we want to know which item is sold, useful key. 
unset($learn[1],$learn[2]);
//unset($learn); will delete all array

//to update array key re-order
$learn = array_values($learn);

var_dump($learn);

//echo $learn[1]; //excute Arrays
//echo $learn; array to string conversion error

//implode is display all array function
//echo implode("\n",$learn);
?>