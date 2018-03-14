<?php
  $url = $_POST["redirect"];
  $errorurl = $_POST["redirecterror"];
  $to = $_POST["recipient"];
  $from = $_POST["from"];
  $replyto = $_POST["replyto"];
  $subject = $_POST[""];
  $firstname = $_POST["FirstName"];
  $lastname = $_POST["LastName"];
  $email = $_POST["email"];
  $body = '<Strong>Client Name:</strong>'.$firstname .' ' .$lastname .'<br /><br />';
  $body .= '<Strong>Client Email:</strong>'.$email .'<br /><br />';
  $body .= '<Strong>Comments :</strong>'.$_POST['comments'] .'<br /><br />';
  $headers = 'From: ' .$from . '\r\n';
  $headers .= 'Reply-To: ' .$replyto .'\r\n';
  $headers .= 'MIME-Version: 1.0\r\n';
  $headers .= 'Content-type: text/html; charset=iso-8859-1' .'\r\n';
  //legacy mail
  if (mail($to, $subject, $body, $headers)) {
    header("Location: $url");
  } else {
    header("Location: $errorurl");
  }

?>