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
	<form action="process.php" name="clientinfo" method="get" novalidate> <!--if there is any validation, browser will 
	send it to server but this is test-->
	  <label>First Name:</label>
	  <input type="text" name="firstname" id="firstname" />
	  <br />
	  <label>Last Name:</label>
	  <input type="text" name="lastname" id="lastname" />
	  <br />
	  <label>Email:</label>
	  <input type="email" name="email" id="email" />
	  <br />
	  <!--create radio button-->
	  <input type="radio" name="card_type" value="visa" />Visa<br />
	  <input type="radio" name="card_type" value="mastercard" />Master Card<br />
	  <input type="radio" name="card_type" value="Discover" />Discover<br />
	  <!--create checkbox-->
	  
	  <input type="checkbox" name="msh" value="mushrooms" /> Mushrooms<br /> <!--if we don't set value, check message default 'on'-->
	  <input type="checkbox" name="olv" /> Olives<br />
	  <input type="checkbox" name="pep" /> Pepperoni<br />
	  <!--store as array, if empty array, push to the end -->
	  <h3>Toppings</h3>
	  <input type="checkbox" name="top[]" value="pep" /> Pepperoni<br />
	  <input type="checkbox" name="top[]" value="msh" /> Mushrooms<br />
	  <input type="checkbox" name="top[]" value="olv" /> Olives<br />
	  <!--multipe selection option have to have name to send all form control-->
	  <select name="top[] size="3" multiple>
	    <option value="pep2">Pepperoni2</option>
		<option value="msh2">Mushrooms2</option>
		<option value="olv2">Olives2</option>
	  </select>
	  <br />
	  <!--drop down menu select-->
	  <select name="credit_card_type">
	    <option>Choose Credit Card</option> <!--if we don't choose one of selection, just send default value-->
	    <option value="visa">Visa</option>
		<option value="mastercard">mastercard</option>
		<option value="Discover">Discover</option>
	  </select>
	  <br />
	  <input type="submit" value="Send Information" />
	</form>
  </body>
</html>