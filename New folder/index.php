<?php
//initializing variables
  $nameerror = '';
  $name = '';
  $emailerror = '';
  $email = '';
  $phoneerror = '';
  $phone = '';
  $addresserror = '';
  $address = '';
  $cityerror = '';
  $city = '';
  $stateerror = '';
  $state = '';
  $ziperror = '';
  $zip = '';
  $optionerror = '';
  $basic = '';
  $firstclass = '';
  $rental = '';
  $hotel = '';
  $tour = '';
  $formok = FALSE;  //Setting form validator to false if first attempt
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $formok = TRUE; //Setting form validator to true to begin input validation
    if (isset($_POST['name'])) {
      $name = $_POST['name'];  //Storing name in variable
      if (empty($name)) {
        $nameerror = 'Name is required!';  //Validation name 
        $formok = FALSE;
      } else {
        if (strlen($name) < 5) { //Validating name length
          $nameerror = 'Name must be at least five characters!';
          $formok = FALSE;
        }
      }
    }
    if (isset($_POST['email'])) {
      $email = $_POST['email'];  //storing email in variable
      if (empty($email)) {  //validating email
        $emailerror = 'Email is required!';
        $formok = FALSE;
      } else {
          if (strpos($email,'@') == FALSE) {  //validating email contains @
          $emailerror = 'Email must contain the @ character!';
          $formok = FALSE;
          } else {
              if (strlen($email) < 5) {  //validating email length
                $emailerror = 'Email must be at least five characters!';
                $formok = FALSE;
              }
            }
        }    
    }
    if (isset($_POST['phone'])) {
      $phone = $_POST['phone'];  //storing input in variable
      if (empty($phone)) {
        $phoneerror = 'Phone number is required!';  //validating phone number
        $formok = FALSE;
      } else {
        if (!is_numeric($phone)) {  //validating only number was entered
          $phoneerror = 'Phone number must be all numbers!';
          $formok = FALSE;
        } else {
          if (strlen($phone) != 10) { // validating length of phone number
            $phoneerror = 'Phone number must have ten digits!';
            $formok = FALSE;
          } else {
            if (strpos($phone, '.') == TRUE) { //validating the number is a whole number
              $phoneerror = 'Phone number must be all numbers!';
              $formok = FALSE;
            }
          }
        }
      }
    }
    if (isset($_POST['address'])) {  //validating address
      $address = $_POST['address']; //storing input in variable
      if (empty($address)) {
        $addresserror = 'Address is required!';
        $formok = FALSE;
      }
    }
    if (isset($_POST['city'])) { //validating city
      $city = $_POST['city']; //storing input in variable
      if (empty($city)) {
        $cityerror = 'City is required';
        $formok = FALSE;
      }
    }
    if (isset($_POST['state'])) { //validating state
      $state = $_POST['state'];  //storing in a variable
      if (empty($state)) {
        $stateerror = 'State is required!';
        $formok = FALSE;
      } else {
          $state = strtoupper($state);  //converting input to uppercase
          if ($state != 'AL' && $state != 'AK' && $state != 'AZ' && $state != 'AR' && $state != 'CA' && $state != 'CO' 
           && $state != 'CT' && $state != 'DE' && $state != 'FL' && $state != 'GA' && $state != 'HI' && $state != 'ID'
           && $state != 'IL' && $state != 'IN' && $state != 'IA' && $state != 'KS' && $state != 'KY' && $state != 'LA'
           && $state != 'ME' && $state != 'MD' && $state != 'MA' && $state != 'MI' && $state != 'MN' && $state != 'MS'
           && $state != 'MO' && $state != 'MT' && $state != 'NE' && $state != 'NV' && $state != 'NH' && $state != 'NJ'
           && $state != 'NM' && $state != 'NY' && $state != 'NC' && $state != 'ND' && $state != 'OH' && $state != 'OK'
           && $state != 'OR' && $state != 'PA' && $state != 'RI' && $state != 'SC' && $state != 'SD' && $state != 'TN'
           && $state != 'TX' && $state != 'UT' && $state != 'VT' && $state != 'VA' && $state != 'WA' && $state != 'WV'
           && $state != 'WI' && $state != 'WY') {  //validating is a state
              $stateerror = 'You must enter a valid state!';
              $formok = FALSE;          
          }
        }    
    }
    if (isset($_POST['zip'])) { //validating zip
      $zip = $_POST['zip']; //storing input in variable
      if (empty($zip)) {
        $ziperror = 'Zip is Required';
        $formok = FALSE;
      } else {
        if (!is_numeric($zip)) {  //validating number was entered
          $ziperror = 'Zip code must be all numbers!';
          $formok = FALSE;
        } else {
          if (strlen($zip) != 5) {  //validating length
            $ziperror = 'Zip code must have five digits!';
          } else {
            if (strpos($zip, '.')) {  //validating input is whole number
              $ziperror = 'Zip code must be all numbers!';
              $formok = FALSE;
            }
          }
        }
      }
    }
    /*************************************
    * Validating options. If an option is*
    * selected, it is set as stored      *
    * False, if not.                     *
    *************************************/
    if (isset($_POST['basic'])) { //
      $basic = $_POST['basic'];
    } else {
      $basic = FALSE;
    }
    if (isset($_POST['firstclass'])) { 
      $firstclass = $_POST['firstclass'];
    } else {
      $firstclass = FALSE;
    }
    if (isset($_POST['rental'])) {
      $rental = $_POST['rental'];
    } else { 
      $rental = FALSE;
    }
    if (isset($_POST['hotel'])) {
      $hotel = $_POST['hotel'];
    } else {
      $hotel = FALSE;
    }
    if (isset($_POST['tour'])) {
      $tour = $_POST['tour'];
    } else {
      $tour = FALSE;
    }
    /*******************************************************
    * validating that at least one option is checked.      *
    * If only one, it must be basic airfare.               *
    *******************************************************/
    if ((!$basic) || (!$basic && !$firstclass && !$rental && !$hotel && !$tour)) 
    {
      $optionerror = 'Basic airfare be selected. If you desire no add-ons, leave only Basic airfare selected.';
      $formok = FALSE;
    } 
  } 
    
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Vacation Form</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <!-- Heading -->
    <img src="plane.png" alt="Airplane" width="100" height="84" />
    <h1 class="title">Stephen Orsino Travel Agency</h1>
    <div class="container">
      <h2 class="title">Please fill out the form below</h2>
    <!-- Information fields -->
      <form action="<?php if ($formok) {echo 'displayform.php';} else {echo 'index.php';} ?>" method="post" novalidate>
      <fieldset>
        <legend>Personal Information</legend>
        <table>
          <tr>
            <td>Name: </td>
            <td><input type="text" name="name" id="name" value="<?php echo $name; ?>" /></td>
            <td><span class="error"><?php echo $nameerror; ?></span></td>
          </tr>
          <tr>
            <td>Email </td>
            <td><input type="text" name="email" id="email" value="<?php echo $email; ?>" /></td>
            <td><span class="error"><?php echo $emailerror; ?></span></td>
          </tr>
          <tr>
            <td>Phone number:  </td>
            <td><input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" /></td>
            <td><span class="error"><?php echo $phoneerror; ?></span></td>
          </tr>
          <tr>
            <td>Street address: </td>
            <td><input type="text" name="address" id="address" value="<?php echo $address; ?>" /></td>
            <td><span class="error"><?php echo $addresserror; ?></span></td>
          </tr>
          <tr>
            <td>City: </td>
            <td><input type="text" name="city" id="city" value="<?php echo $city; ?>" /></td>
            <td><span class="error"><?php echo $cityerror; ?></span></td>
          </tr>
          <tr>
            <td>State: </td>
            <td><input type="text" name="state" id="state" value="<?php echo $state; ?>" /></td>
            <td><span class="error"><?php echo $stateerror; ?></span></td>
          </tr>
          <tr>
            <td>Zip code: </td>
            <td><input type="text" name="zip" id="zip" value="<?php echo $zip; ?>" /></td>
            <td><span class="error"><?php echo $ziperror; ?></span></td>
          </tr>
        </table>
      </fieldset>
    <!-- End information fields -->
    <!-- Options -->
      <fieldset>
        <legend>Trip Options</legend>
        <table>
          <tr>
            <td><input type="checkbox" name="basic" id="basic" checked /></td>
            <td>Basic airfare</td>
            <td> = $500.00</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="firstclass" id="firstclass" <?php if($firstclass) echo "checked";?>/></td>
            <td>First class travel upgrade</td>
            <td> + $100.00</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="rental" id="rental" <?php if($rental) echo "checked";?>/></td>
            <td>Rental Vehicle</td>
            <td> + $200.00</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="hotel" id="hotel" <?php if($hotel) echo "checked";?>/></td>
            <td>Hotel reservation</td>
            <td> + $400.00</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="tour" id="tour"<?php if($tour) echo "checked";?>/></td>
            <td>Destination tour</td>
            <td> + $200.00</td>
          </tr>
        </table>
        <span class="error"><?php echo $optionerror; ?></span>
      </fieldset>
    <!-- End options -->
      <br />
    <!-- Submit button -->
      <input type="submit" value="<?php if ($formok) echo 'Submit'; else echo 'Validate';?>" />
      <?php if ($formok) echo "<span class='valid'>The information you provided seems valid! Click send.</span>"; else echo "Submit form"; ?>    
      </form>
      <br /><br />
    </div>
  </body>
</html>