<?php 
//If it's not first time, assign variable
if ($_SERVER["REQUEST_METHOD"] != 'POST') {
  $name = '';
  $email = '';
  $details = '';
  $organization = '';
}

$title = "Learn php Arrays function display Courses";
include("include/header.php"); 
?>
<!--main contents-->
<div class="coursePage container">
<div class="col"><!--if i remove col, not fit with full screen size. why?-->
  <h2>Course List</h2>
  
  <?php 

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
      include_once("process.php");
      if (isset($error_message)) {
        echo $error_message;
      }
    } 
    else {
      echo '<p>If you think there is somthing I&rsquo;m missing, let me know!
      Complete the form to send me an email.</p>';
      
    //else tag is opened 
  ?>
  <!--don't want to submit with get method, since it's really easy to modify
  query string data rather use POST-->
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
    <table>
      <tr>
        <!--label works with id attribute-->
        <th><label for="name">Name</label></th>
        <td><input type="text" id="name" name="name" value="<?php echo $name; ?>"/></td>
      </tr>
      <tr>
        <th><label for="email">Email</label></th>
        <td><input type="text" id="email" name="email" value="<?php echo $email; ?>"/></td>
      </tr>
      <tr>
        <th><label for="details">Suggest Item Details</label></th>
        <td><textarea id="details" name="details">Your suggestion<?php echo $details; ?></textarea></td>
      </tr>
      <tr>
        <th><label for="organization">Organization</label></th>
        <td>
          <select name="organization" id="organization" size="1">
            <option value="">Choose option..</option>
            <option value="school" <?php if ((isset($organization)) $organization == "school"){ echo "selected";} ?> >School</option>
            <option value="non-profit" <?php if ((isset($organization)) $organization == "non-profit"){ echo "selected";} ?> >Non-Profit</option>
            <option value="profit" <?php if ((isset($organization)) && $organization == "profit") {echo "selected";} ?> >Profit</option>
            <option value="indivisual" <?php if ((isset($organization)) && $organization == "indivisual") {echo "selected";} ?> >Indivisual</option>
          </select>
        </td>
      </tr>
    </table>
    
    <input type="submit" value="Send"/>
  </form>
  <?php } //close else block?>
</div>
</div><!--end main contents-->
<!--footer-->
<?php include("include/footer.php"); ?>