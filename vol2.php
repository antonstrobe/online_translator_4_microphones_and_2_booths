<?php 
$subject_v2 = $_POST['subject_v2'];
$output_v2 = "{$subject_v2}";
file_put_contents("vol2.txt",$output_v2);
?>