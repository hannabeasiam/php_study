<?php
/**
 * not works, figure out
 * 
 * 
 */
$username = 'phpacademy';
$password = '';

$timeline = curl_init("https://twitter.com/statuses/user_timeline.xml");

curl_setopt($timeline, CURLOPT_USERPWD, $username.':'.$password);
curl_setopt($timeline, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($timeline);
$result = new SimpleXMLElement($result); //transfer result into simple xml element

echo $result->status[0]->text."<p />"; //array 
echo $result->status[1]->text;
?>