<?php
  $title = "Timestamps in PHP";
  $now = date('n/j/Y');
  $date1 = date('l, F d, Y');
  $date2 = date('Y-m-d',1331843400);
  $timestampnow = time();
  $expires = mktime(23,59,59,2,5,2018);
  $expiresdate = date('y-m-d \a\t H:i:s',$expires);
  $date3 = strtotime('tomorrow 10:15am');
  $date3date = date('y-m-d \a\t H:i:s',1516698900);

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
	<?php
	  echo $now;
	  echo '<br>';
	  echo $date1;
	  echo '<br>';
	  echo $date2;
	  echo '<br>';
	  echo $timestampnow;
	  echo '<br>';
	  echo 'Expires: ' . $expires;
	  echo '<br>';
	  echo 'Expiry Date: ' . $expiresdate;
	  echo '<br>';
	  echo $date3;
	  echo '<br>';
	  echo $date3date;
	?>
  </body>
</html>