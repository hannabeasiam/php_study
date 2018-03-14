<?php
$ch = curl_init('http://website');

if ($ch !== false) {
  /**
   * curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   * curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   * Display this as array as below
   * so many setopt options in http://php.net/manual/en/function.curl-setopt.php
   */
  curl_setopt($ch, array(
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false
  ));

  $result = curl_exect($ch);
  
  //if result is false print error msg, if valide parse the response, store as variable ..
  if ($result === false) {
    echo 'Error code:' .curl_errno($ch). "\n"; //get a error description by calling curl_errno
    curl_close($ch); //always close the curl
  }
  else {
    //parse response ...
    $document = new DOMDocument();
    if (@$document->loadHTML($result) !== false) { //HTML5 warning , so put @ ahead to supress warning but why cause error?
      $elements = $document->getElementsByTagName('title'); //get the title from HTML page

      if($elements->lenth > 0) { //validate if title is not null
        if(stripos($elements->item(0)->nodeValue, $search_text) !== false) {
          $is_site_up = true;
        }
      }

    }

    curl_close($ch); //always close the curl
  }
  curl_close($ch); //always close the curl
}

?>