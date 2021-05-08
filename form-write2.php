<?php 
$subject_k2 = $_POST['subject_k2'];
$output = "{$subject_k2}";
file_put_contents("form2.txt",$output);

?>