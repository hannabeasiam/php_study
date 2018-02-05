<?php

$name = 'Hanna';

//variable containing your birth date and time.
$birth_ts = mktime(02, 50, 00, 11, 16, 1991); //690246000; 

//Display your birth date and time. Calculate and display how many years, months, days, hours and minutes since you were born.
$birth_date = date('Y/m/d h:i A', $birth_ts);

date_default_timezone_set("America/New_York"); //caused issue with date format "A"
//get timestamp today
$today_ts = time(); //ex, 1516753334 current date timestamp
//$today_date = setTimeStamp($today_ts);
$today = date('Y/m/d h:i A', $today_ts);


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
	'20163' => array('COP1000C Intro Cmp Prg', 'COP1210C Programming1', 'CTS1111C Linux+', 'CIS1513C Project Mgmt'),
	'20171' => array('CIS1000C Intro to Cs', 'COP2071C Db Program Sql', 'COP23337C Programming2', 'CTS1851C Web Authoring1'),
	'20173' => array('COP2361C Oo Analysis', 'CTS852C Client Script'),
	'20181' => array('CTS2857C Serv Side Script'),
);

?>
<?php include("include/header.php");
?>
  
	<!--main contents-->
	<div class="container">
		<div class="primary col" id="date">
		<h2>Welcome to <?php echo $name ?> 's Profile</h2>
		<!-- #########################################################
				question: what will be the better way to display php in html.
				php in HTML or HTML in php. 
		###############################################################-->
		<p>Name: <?php echo htmlspecialchars($name); ?></p>
			<?php
				echo '<strong>Name : </strong>' .$name;
				echo '<br><br>';
				echo '<strong>Birth Day Date : </strong>' .$birth_date;
				echo '<br><br>';	  
				echo "<strong>Today's Date : </strong>" .$today;
				echo '<br><br>';
				echo $dteDiff -> format("<strong>I've lived, </strong>%Y Years  %m Months  %d Days  %H Hours  %I minutes");
				echo '<br><br>';
				echo '<strong>Retire at 67olds : </strong>' .$retire_date-> format('Y/m/d h:i A');
				echo '<br><br>';
				echo $dteRetire -> format("Untill I retire,<strong> %R %a Days </strong>left");
			?>
	  </div>
		
		<div class="second col" id="array">
			<h2>Courses <?php echo $name ?> took</h2>
			<?php
			
				foreach ($course as $semester => $cours_detail) {
					echo '<h3>Semester - ' .$semester .' : </h3>';
					foreach ($cours_detail as $classname) {
						echo $classname .'<br />';
					}
					echo '<br />';
				}
				
			?>
		</div>
	</div>

	<!--include footer-->
	<?php include("include/footer.php"); ?>
