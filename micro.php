<?php 
$subject_micro = $_POST['subject_micro'];
$output_micro = "{$subject_micro}";
file_put_contents("micro.txt",$output_micro);
?>