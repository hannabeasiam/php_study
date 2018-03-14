<?php

$user_ip = getenv('REMOTE_ADDR'); //get user ip address
//echo $user_ip; returns ::1  //is ip6 version
//$user_ip = $_SERVER['REMOTE_ADDR'];

// http://www.geoplugin.net/php.gp?ip=$user_ip
/* if I call url " " , cause error, since $user_ip variable */
$geo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=$user_ip')); //file_get_contents get data as (serialized array)string, unserialize convert string to array
$city = $geo["geoplugin_city"]; 
$region = $geo["geoplugin_regionName"]; //geoplugin_region returned FL
$country = $geo["geoplugin_countryName"];

echo $user_ip ."<br />";
echo "City: " .$city ."<br />";
echo "Region: " .$region ."<br />";
echo "country: " .$country ."<br />";
foreach ($geo as $key => $value) {
  echo $key .' = ' .$value ."<br />";
}
/**
 * Serialize array? = php can not store outside of running php script, so 
 * so store as serialize and use unserialize to get php value
 * 
 * 
 * 
 */
?>