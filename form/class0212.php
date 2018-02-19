<?php
$title = "function";
function coin_toss() {
  $coin = (mt_rand(0,1) == 0) ? 'heads' : 'tails';
  return $coin;
}
function display_error($error) {
  echo '<p class = "error" >' .$error .'</p>';
}
function ave_of($x, $y, $z) {
  $ave = ($x+$y+$z)/3;
  return $ave;
}
//side effect, when you call function
?>
<!doctype html>
<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>
  <p><?php echo '3,4,5 :  ' .ave_of(3,4,5);?></p>
  <p><?php echo '3,4,5,5 : ' .ave_of(3,4,5,5,6,7,8);
  var_dump(ave_of(3,4,5,5));?></p>
  <p><?php //echo ave_of(3,3)?></p>
  <p><?php// echo '3,4 ; ' .ave_of(3,4);?></p>
</body>
</html>