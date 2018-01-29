<?php

$name = 'hanna';
date_default_timezone_set("America/New_York"); 
//variable containing your birth date and time.
$birth_ts = mktime(02, 50, 00, 11, 16, 1991); //690246000; 

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
$retire_date = new DateTime();
$retire_date-> setTime(00, 00, 00);
$retire_date-> setDate(2059, 11, 16);

$dteRetire = $retire_date -> diff($dteEnd);
//Create an associative multi-dimensional array containing the courses (number and name)
$course = array(
	20163 => array('COP1000C Intro Cmp Prg', 'COP1210C Programming1', 'CTS1111C Linux+', 'CIS1513C Project Mgmt'),
	20171 => array('CIS1000C Intro to Cs', 'COP2071C Db Program Sql', 'COP23337C Programming2', 'CTS1851C Web Authoring1'),
	20173 => array('COP2361C Oo Analysis', 'CTS852C Client Script'),
	20181 => array('CTS2857C Serv Side Script'),
);



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
	  echo $dteDiff -> format("I lived,  %Y Years  %m Months  %d Days  %H Hours  %I minutes");
		echo '<br><br>';
		echo 'Retire at 67, : ' .$retire_date-> format('Y-m-d H:i');
		echo '<br><br>';
	  echo $dteRetire -> format("Untill I retire, %R %a Days left");
	?>
	</div>
	<div>
		<h2>Courses <?php echo $name ?> took</h2>
		<?php
		
	  foreach ($course as $semester => $coursename) {
			echo 'Semester Number: ' . $semester . ' - ';
			foreach ($coursename as $classnumber) {
				echo $classnumber . ' ; ';
			}
			echo '<br><br>';
		}
		?>
	</div>

  </body>
</html>