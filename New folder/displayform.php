<?php
//Store input from form into variables
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $total = 0;
//If option is selected, add to $total variable
  if (isset($_POST['basic'])) {    
    $basic = 'Selected';
    $total += 500;
  }
  else 
    $basic = 'Not selected';
  if (isset($_POST['firstclass'])) { 
    $firstclass = 'Selected';
    $total += 100;
  }
  else
    $firstclass = 'Not selected';
  if (isset($_POST['rental'])) {
    $rental = 'Selected';
    $total += 200;
  }
  else
    $rental = 'Not selected';
  if (isset($_POST['hotel'])) {
    $hotel = 'Selected';
    $total += 400;
  }
  else
    $hotel = 'Not selected';
  if (isset($_POST['tour'])) {
    $tour = 'Selected';
    $total += 200;
  }
  else 
    $tour = 'Not selected';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Trip Summary</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <!-- heading -->
    <img src="plane.png" alt="Airplane" width="100" height="84" />
    <h1 class="title">Stephen Orsino Travel Agency</h1>
    <div class="container">
      <h2 class="title">Trip Summary</h2>
    <!-- Information Section -->
      <fieldset>
        <legend>Your Information</legend>
        <table>
          <tr>
            <td>Name:   </td>
            <td><?php echo $name; ?></td>
          </tr>
          <tr>
            <td>Email Address:    </td>
            <td><?php echo $email; ?></td>
          </tr>
          <tr>
            <td>Phone Number:   </td>
            <td><?php echo $phone; ?></td>
          </tr>
          <tr>
            <td>Street Address:   </td>
            <td><?php echo $address; ?></td>
          </tr>
          <tr>
            <td>City:  </td>
            <td><?php echo $city; ?></td>
          </tr>
          <tr>
            <td>State:    </td>
            <td><?php echo $state; ?></td>
          </tr>
          <tr>
            <td>Zip Code:   </td>
            <td><?php echo $zip; ?></td>
          </tr>
        </table>
      </fieldset>
    <!-- End information Section -->
    <!-- Options section -->
      <fieldset>
        <legend>Trip Options</legend>
        <table>
          <tr>
            <td>Basic Airfare:    </td>
            <td><?php echo $basic; ?></td>
            <td><?php if ($basic == 'Selected') echo ' + $500.00'; ?></td>
          </tr>
          <tr>
            <td>First Class Upgrade:    </td>
            <td><?php echo $firstclass; ?></td>
            <td><?php if ($firstclass == 'Selected') echo ' + $100.00'; ?></td>
          </tr>
          <tr>
            <td>Rental Vehicle:   </td>
            <td><?php echo $rental; ?></td>
            <td><?php if ($rental == 'Selected') echo ' + $200.00'; ?></td>
          </tr>
          <tr>
            <td>Hotel Reservation:    </td>
            <td><?php echo $hotel; ?></td>
            <td><?php if ($hotel == 'Selected') echo ' + $400.00'; ?></td>
          </tr>
          <tr>
            <td>Destination Tour:   </td>
            <td><?php echo $tour; ?></td>
            <td><?php if ($tour == 'Selected') echo ' + $200.00'; ?></td>
          </tr>
        </table>
      </fieldset>
      <!--end Options-->
      <!-- Display Total -->
      <h3>Your total price for this trip: $<?php echo $total; ?>.00</h3>
      <br /><br />
    </div>
  </body>
</html>