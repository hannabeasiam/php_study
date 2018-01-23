<?php 
$num_one = 1;
$num_two = 2;
$num_three = 3;

echo $num_one;
echo 1;
echo "1";
//var_dump print with variable type
var_dump( $num_one );
var_dump( 1 );
var_dump( "1" );

var_dump( $num_one + $num_two - $num_three );

//floating point number
$distance_home = 1.2;
$distance_work = 2.5;

var_dump( $distance_home + $distance_work + $num_three + .3 ); //mix with floating point number and number, is fine

$a = 5;
var_dump( $a += 5 ); //a=10
var_dump ( $a++ ); //a=10
var_dump($a); //a=11
var_dump( ++$a ) //a=12
?>