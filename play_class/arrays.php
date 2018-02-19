<?php
  $title = "Arrays";
  $names = array('Mickey Mouse', 'Daffy Duck', 'Goofy Dog');
  $royalty = array();
  $royalty[0] = 'Queen';
  $royalty[1] = 'King';
  $royalty[2] = 'Princess';
  $letters = array('a', 'b', 'c', 'd');
  $letters[] = 'e';
  $alphabet = array('a', 'b', 'c', 'd');
  $letter1 = $alphabet[0];
  if (isset($alphabet[4])) {
    $letter4 = $alphabet[4];
  } else {
	$letter4 = '';
  }
  $alphabet[5] = 'h';
  unset($alphabet[1]);
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
	  print_r($names);
	  echo '<pre>';
	  //print_r($names);
	  //print_r($royalty);
	  print_r($letters);
	  print_r($alphabet);
	  echo '</pre>';
	  echo $letter1;
	  echo '<br>';
	  echo 'Letter 4 = ' . $letter4 . '<br>';
	  echo 'Alphabet array elements = ' . count($alphabet);
	?>
  </body>
</html>