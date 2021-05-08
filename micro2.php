<?php 
$subject_micro = $_POST['subject_micro'];
$output_micro = "{$subject_micro}";
file_put_contents("micro2.txt",$output_micro);
?>