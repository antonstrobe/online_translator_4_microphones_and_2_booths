<?php 
$subject = $_POST['subject'];
$output = "{$subject}";
file_put_contents("form.txt",$output);

?>