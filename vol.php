<?php 
$subject_v = $_POST['subject_v'];
$output_v = "{$subject_v}";
file_put_contents("vol.txt",$output_v);
?>