<?php

$name = 'hanna';

//variable containing your birth date and time.
$birth_ts = mktime(00, 00, 00, 11, 16, 1991); //690246000; 

//Display your birth date and time. Calculate and display how many years, months, days, hours and minutes since you were born.
$birth_date = date('Y-m-d H:i', $birth_ts);

//get timestamp today
$today_ts = time(); //ex, 1516753334 current date timestamp
$today = date('Y-m-d H:i', $today_ts);

//timestam today - birthy 
$dteStart = new DateTime($birth_date);
$dteEnd = new DateTime($today);
$dteDiff = $dteEnd -> diff($dteStart);

//Calculate and display how many days until you have to retire. Use 67 years as the age to retire.
$retire_ts = mktime (00, 00, 00, 11, 16, 2059);
$retire_date = date('Y-m-d H:i', $retire_ts);
$retireAt = new DateTime($retire_date);
$dteRetire = $retireAt -> diff($dteEnd);
//Create an associative multi-dimensional array containing the courses (number and name)

//$strStart = '1991-11-16 12:00:00';



?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Server Side Scripting Assignment1</title>
    <link href="assignment1.css" rel="stylesheet" type="text/css">
    <script src="assignment1.js"></script>
  </head>
  <body>
  <h1>Welcome to Hanna's Profile</h1>
	<div>
	<?php
	  echo 'Name : ' .$name;
	  echo '<br><br>';
	  echo 'Birth Day Date : ' .$birth_date;
	  echo '<br><br>';	  
	  echo "Today's Date : " .$today;
	  echo '<br><br>';
	  echo $dteDiff -> format("I lived ::::::::: %Y Years ::::::: %m Months :::: %d Days :::: %H Hours ::::::: %I minutes");
	  echo '<br><br>';
	  echo $today;
	  echo $dteRetire -> format("Untill I retire, %R %a Days left");
	?>
	</div>

  </body>
</html>