<?php 
$subjectf = $_POST['subjectf'];
$output = "{$subjectf}";
file_put_contents("iframe.txt",$output);

?>