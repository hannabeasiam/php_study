<?php
$title = "function2 " ;
//function by variable
function add_3_by_val($value) {
  $value += 3;
  echo '<p>Number: ' .$value .'</p>';
}
//function by reference
function add_3_by_ref(&$value) { //sign made it as reference
  $value += 3;
  echo '<p>Number: ' .$value .'</p>';
}//multiple value return (1. return as array, 2. to make your parameter by reference)

?>
<!doctype html>
<html>
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
  <h2>By value</h2>
  <?php
    $number = 5;
    add_3_by_val($number); //passing number by value here ::8
    echo '<p>Number: ' .$number .'</p>'; //:: 5
    
  ?>
  
  <h2>By reference</h2>
  <?php
    $number = 5;
    add_3_by_ref($number); //passing number by value here ::8
    echo '<p>Number: ' .$number .'</p>'; //:: 5
    
  ?>
  </body>
</html>