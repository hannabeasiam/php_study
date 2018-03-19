<?php
  $title = "Calculate Future Value";
  $message = array();
  $message[30] = 'In function calculate future value';
  function calculate_future_value($investment, $interest_rate, $years ) {
    //trap the situation
    if ($investment <= 0) {
      throw new Exception('Please check investment arguments',30); //second argument 30 called from getCode
    }
    if ($interest_rate <= 0) {
      throw new Exception('Please check interest_rate arguments',30);
    } 
    if ($years <= 0) {
      throw new Exception('Please check years arguments',30);
    }
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
      $future_value = ($future_value + ($future_value * $interest_rate * 0.01));
    }
    return round($future_value, 2);
  }
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
    $myInvestment = 0;
    $myRate = 6;
    $myYears = 0;
      try {
        $fv = calculate_future_value($myInvestment, $myRate, $myYears);
        echo 'future value calculated succesfully <br />';
        echo 'Future vale of ' .$myInvestment .' with ' . $myRate .'% interest over' .$myYears .' years is: ' .$fv;
      } catch (Exception $e) {
        //echo 'Error: ' .$e->getMessage();
        echo 'Error: ' .$e->getMessage() . '<br /> Error Code: ' .$message[$e->getCode()];
      }
  
   
    ?>
    </body>
</html>