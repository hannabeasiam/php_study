<?php
// number in pounds we want to convert to kilograms
$pounds = 140;
// floating point value for the pound to kilogram conversion
$lb_to_kg = 0.453592;
// use the variables above to calculate pounds multiplied by the kilogram conversion
$kilograms = $pounds * $lb_to_kg;
// display the puinds to kilograms
echo "weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg";

// number in miles we want to convert to kilometers
$miles = 2.5;
// floating point valude for mile to kilometer conversion
$miles_to_km = 1.60934;
// use  the variable above to caculate miles multiplied by the kilometer
$km = $miles * $miles_to_km;
//display
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $km;
echo " km";
?>