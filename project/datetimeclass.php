<?php
  $title = "Dates and Times with PHP classes";
  $now = new DateTime(); //if you don't pass any parameter, default current time
  $expires = new DateTime('2015-03-15 13:30:35');
  $tomorrow = new DateTime('+1 day');
  $appointment = new DateTime('next Friday +1 week 13:30');

  //interval
  $interval = new DateInterval('P30D');
  $interval_1 = new DateInterval('P1Y2M3DT1H2M3S');
 // $interval_2->add($interval_1);
  $interval_3 = $expires -> diff($tomorrow);
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
      echo 'Now = ' .$now ->format('n/j/Y H:i:s');  //object operator usually '.', in php object operator is '->'
      echo '<br>';
      echo 'tomorrow = ' . $tomorrow ->format('n/j/Y H:i:s');
      echo '<br>';
      echo 'appointment = ' . $appointment ->format('n/j/Y H:i:s');
      echo '<br>';
      echo 'Interval: ' .$interval_1->format('%R %yyears %mmonths %ddays %H:%I:%S');
      echo '<br>';
      echo 'Future = ' .$interval_2->format('n/j/Y H:i:s');
      echo '<br>';
      //echo 'Interval 3: ' .$interval_3->format('%R %yyears %mmonths %ddays %H:%I:%S');

    ?>
  </body>
</html>