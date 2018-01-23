<?php 
$date3 = strtotime('tomorrow 10:15am'); //parse English datetime into timestamp
$date3time = date('y-m-d \a\t H:i:s', 1516702500); //passing timestamp value 

echo $date3 ."\n";
echo $date3time ."\n";
?>