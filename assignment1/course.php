<?php 
//Learn about _SERVER
if ($_SERVER["REQUEST_METHOD"] != 'POST') {
  $name = '';
  $email = '';
  $details = '';
  $organization = '';
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {//open if statement store all post into array
  //var_dump($_POST);//array(3) { ["name"]=> string(0) "" ["email"]=> string(0) "" ["details"]=> string(0) "" }
  $name = trim(filter_input(INPUT_POST, "name"));
  //$name = trim($_POST['name']);
  $email = trim(filter_input(INPUT_POST, "email"));
  $details = trim(filter_input(INPUT_POST, "details"));
  $organization = trim(filter_input(INPUT_POST, "organization"));
  $validated = true;
  if ($name == "" || $email =="" || $details =="" || $organization =="") {
    $error_message = "Please fill in the required section Name, Email, Details";
    $validated = false;
  }
  //list validator store error message here  
  if (!isset($error_message) && strlen($name) < 3) { //only check if input field not empty
    $name_error = 'Name mush be at least 3 characters long.';
    $validated = false;
  }
  if($validated != false){
    header("location:course.php?status=thanks");
    include("course.php");
    echo "<pre>";
    $email_body = "";
    $email_body .= "Name " .$name ."\n"; //view source will have line break not broswer
    $email_body .= "Email " .$email ."\n";
    $email_body .= "Details " .$details ."\n";
    $email_body .= "Organization " .$organization ."\n";      
    echo $email_body;
    echo "</pre>";
    exit;

  } 


  //To Do: Send email
  // header("location:course.php?status=thanks");
} //opented post cloase here

$title = "Learn php Arrays function display Courses";
include("include/header.php"); 
?>
<!--main contents-->
<div class="coursePage container">
<div class="col"><!--if i remove col, not fit with full screen size. why?-->
  <h2>Course List</h2>
  
  <?php 

    if(isset($_GET['status']) && $_GET['status'] == 'thanks') {
      echo "<p>Thanks for the email I&rsquo;ll check out your suggestion shortly!</p>";
      include_once("location:course.php?status=thanks");
    } 

    else {
      if (isset($error_message)) {
        echo $error_message;
      }
      else {
        echo '<p>If you think there is somthing I&rsquo;m missing, let me know!
        Complete the form to send me an email.</p>';
      }
    //else tag is opened 
  ?>
  <!--don't want to submit with get method, since it's really easy to modify
  query string data rather use POST-->
  
  <form method="POST" action="course.php">
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
            <option value="school" <?php if ($organization == "school"){ echo "selected";} ?> >School</option>
            <option value="non-profit" <?php if ($organization == "non-profit"){ echo "selected";} ?> >Non-Profit</option>
            <option value="profit" <?php if ($organization == "profit") {echo "selected";} ?> >Profit</option>
            <option value="indivisual" <?php if ($organization == "indivisual") {echo "selected";} ?> >Indivisual</option>
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