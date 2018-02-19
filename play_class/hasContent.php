<? php
  $hasContent = true;
  while ($hasContent) {
	echo "No Content";
	if ($_POST['content'] == 'Test') $hasContent = false;
  }
?>