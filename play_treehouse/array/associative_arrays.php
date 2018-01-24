<?php
$iceCream = array(
  'Hanna' => 'Black Cherry', 
  'Treasure' => 'Chocolate', 
  'Dave' => 'Cookie', 
  'Rialla' => 'Strawberry'
);

$iceCream[] = 'Vanila';
var_dump($iceCream);

//echo $iceCream['Hanna'];

//all keys are casting to 1, so only one array key and value d remanin at the end
$keys = array(
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
);
var_dump($keys);
?>