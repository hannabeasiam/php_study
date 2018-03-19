<?php
  $title = "using CURL to get Data";
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
    function divideNumbers($first, $second) {
      try {//trap the error
        return ($first / $second);
      }
      catch (Exception $e) {//what type of exception is catched 
        echo 'Error: ' .$e->getMesbysage(); //by default, eception object generated 
      }
    } 
    echo divideNumbers(100,0);
   ?>
  </body>
</html>