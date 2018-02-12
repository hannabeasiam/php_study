<?php
$title = "function2 " ;
function array_analyze($array, &$sum, &$prod, &$avg) {
  $sum = array_sum($array);
  $prod = array_sum($array);
  $avg = array_sum($array);
}


?>
<!doctype html>
<html>
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
  <h2></h2>
  <?php
    $list = array(1,4,9,16);
    array_analyze($list, $s,$p,$a);
    echo '<pre> sum: ' .$s 
    .'    prod: ' .$p
    .'    avg: ' .$a
    .'</pre>'
  ?>


  </body>
</html>