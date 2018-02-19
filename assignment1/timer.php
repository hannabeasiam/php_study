<?php 
$title = "Learn php date, time funtion display timer";
include("include/header.php"); 
?>
<!--main contents-->
<div class="container">
<div class="col"><!--if i remove col, not fit with full screen size. why?-->
  <h2>Timer</h2>
  <?php
  $dob = mktime(02, 50, 00, 11, 16, 1991); 
  $dob_date = date('Y/m/d h:i A', $dob);
  echo $dob_date;
  $retireAt = $dob_date;
  
  $retInterval = new DateInterval('P67Y');
  $retireAt -> add($retInterval);  
  echo "<br />";
  echo $retInterval -> format("%Y Years  %m Months  %d Days  %H Hours  %I minutes");
  echo "<br />";
  echo $retireAt;
  ?>
</div>
</div><!--end main contents-->
<!--footer-->
<?php include("include/footer.php"); ?>