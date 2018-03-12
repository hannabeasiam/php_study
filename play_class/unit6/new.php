<?php
  $title = "using CURL to get Data";
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
   <h1><?php echo $title; ?></h1>
   <?php 
   /***
    *Ron Swanson Quotes	Television	No	Yes	Unknown	Go!
    * http://ron-swanson-quotes.herokuapp.com/v2/quotes
    */ 
  
    $curl = curl_init("http://ron-swanson-quotes.herokuapp.com/v2/quotes/5");
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
    $page = curl_exec($curl); //actually make that curl
    curl_close($curl); //cloase curl
    echo $page;
    echo '<br>';
    echo '<br>';
    $json = json_decode($page); //Decodes a JSON string
    foreach ($json as $quote) {
      echo $quote . '<br>';
    }
    echo '<br>';
    echo '<br>';
    echo $_SERVER["DOCUMENT_ROOT"]; //just show you defualt root directory
   ?>
  </body>
</html>