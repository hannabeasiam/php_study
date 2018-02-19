<?php
  $title = "Array Loops";
  $transport = array('foot', 'bike', 'car', 'plane');
  $numbers = array();
  for ($i = 0; $i < 10; $i++) {
    $numbers[] = mt_rand(1, 100);
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
	  $mode = current($transport);
	  echo '1. ' . $mode . '<br>';
	  $mode = next($transport);
	  echo '2. ' . $mode . '<br>';
	  $mode = current($transport);
	  echo '3. ' . $mode . '<br>';
	  $mode = prev($transport);
	  echo '4. ' . $mode . '<br>';
	  $mode = end($transport);
	  echo '5. ' . $mode . '<br>';
	  $mode = reset($transport);
	  echo '6. ' . $mode . '<br>';
	  echo '<pre>';
	  print_r($numbers);
	  echo '</pre>';
	  $numbers_string = '';
	  for ($i = 0; $i < count($numbers); $i++) {
		$numbers_string .= $numbers[$i] . ' ';
	  }
	  echo $numbers_string . '<br>';
	  foreach ($numbers as $random) {
		echo $random . ' ';
	  }
	  $newRandom = array($numbers);
	  echo '<pre>';
	  print_r($newRandom);
	  echo '</pre>';
	?>
  </body>
</html>