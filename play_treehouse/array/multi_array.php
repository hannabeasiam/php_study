<?php
  $title = "Multi array";
  $relatives = array(
    'Father' => array('john'),
	'Mother' => array('jane'),
	'Uncle' => array('jony', 'jam', 'uncle3'),
	'Nephew' => array('nephew1','nephew2','nephew3','nephew4')
  );
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
	  echo '<pre>';
	  print_r($relatives);
	  echo '</pre>';
	?>
  </body>
</html>