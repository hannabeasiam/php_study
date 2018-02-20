<?php 
  include_once("course.php");
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
    //if (!isset($error_message) && strlen($name) < 3) { //only check if input field not empty
    if (strlen($name) < 3) {   
      $name_error = 'Name mush be at least 3 characters long.';
      $validated = false;
    }
    if($validated != false){
      
      $email_body = "";
      $email_body .= "Name " .$name ."\n"; //view source will have line break not broswer
      $email_body .= "Email " .$email ."\n";
      $email_body .= "Details " .$details ."\n";
      $email_body .= "Organization " .$organization ."\n";
      echo "<p>Thanks for the email I&rsquo;ll check out your suggestion shortly!</p>";
      echo "<pre>";
      echo $email_body;
      echo "</pre>";           
    } 
  } 

?>