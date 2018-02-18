<?php 
//Learn about _SERVER
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  //var_dump($_POST);//array(3) { ["name"]=> string(0) "" ["email"]=> string(0) "" ["details"]=> string(0) "" }
  $name = trim(filter_input(INPUT_POST, "name"));
  //$name = trim($_POST['name']);
  $email = trim(filter_input(INPUT_POST, "email"));
  $details = trim(filter_input(INPUT_POST, "details"));

  if ($name == "" || $email =="" || $details =="") {
    echo "Please fill in the required section Name, Email, Details";
    exit;
  }

  echo "<pre>";
  $email_body = "";
  $email_body .= "Name " .$name ."\n"; //view source will have line break not broswer
  $email_body .= "Email " .$email ."\n";
  $email_body .= "Details " .$details ."\n";
  echo $email_body;
  echo "</pre>";

  //To Do: Send email
  header("location:course.php?status=thanks");
}

$title = "Learn php Arrays function display Courses";
include("include/header.php"); 
?>
<!--main contents-->
<div class="coursePage container">
<div class="col"><!--if i remove col, not fit with full screen size. why?-->
  <h2>Course List</h2>
  
  <?php if(isset($_GET['status']) && $_GET['status'] == 'thanks') {
    echo "<p>Thanks for the email I&rsquo;ll check out your suggestion shortly!</p>";
  } else {
  ?>
  <!--don't want to submit with get method, since it's really easy to modify
  query string data rather use POST-->
  <p>If you think there is somthing I&rsquo;m missing, let me know!
  Complete the form to send me an email.</p>
  <form method="post" action="course.php">
    <table>
      <tr>
        <!--label works with id attribute-->
        <th><label for="name">Name</label></th>
        <td><input type="text" id="name" name="name"/></td>
      </tr>
      <tr>
        <th><label for="email">Email</label></th>
        <td><input type="text" id="email" name="email"/></td>
      </tr>
      <tr>
        <th><label for="details">Suggest Item Details</label></th>
        <td><textarea id="details" name="details">Your suggestion</textarea></td>
      </tr>
    </table>
    
    <input type="submit" value="Send"/>
  </form>
  <?php } //close else block?>
</div>
</div><!--end main contents-->
<!--footer-->
<?php include("include/footer.php"); ?>