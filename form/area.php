<?php
//get is visible to the broswer, post is invisible to broswer but using same way
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'Chris' and $password == 'password1')
{
    echo 'Welcome to the secret website, you are in';
}
else
{
    echo 'Wrong username or password';
}
?>