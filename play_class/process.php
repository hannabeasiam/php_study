<?php
  $title = "Client Form";
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
	  /*special array created by php processor called super global
		1. $_SERVER (server and page) , 
		a super global array, store client's information from Form (get/post)	
		php is case sensitive, $_GET
	  */
	  $firstname = $_GET['firstname'];

	  echo $_SERVER['REQUEST_METHOD'];
	  echo '<pre>';
	  print_r ($_GET);
	  echo '</pre>';
	  //associated array created, now we can get entity with name attribute of the array
	  if (empty($firstname)) {
		echo 'First Name is required';
	  } else {
		echo $firstname;
	  }
	  echo '<br />';
	  //check radio button isset check if radio selection send or not
	  if (isset($_GET['card_type'])) {
		$card_type = $_GET['card_type'];
		echo $card_type;
	  } else {
		echo 'Select Card Type is required';
	  }
	  echo '<br />';
	  //array
	  if (isset($_GET['top'])) {
	  // for each we can directly call $_GET['top'] but, in future, easy to see superglobal update
		$toppings = $_GET['top'];
		foreach ($toppings as $key => $value) {
		  echo $key . ' = ' .$value .'<br />';
		}
	  } else {
		echo 'No toppings selected';
	  }	  
	?>

  </body>
</html>

