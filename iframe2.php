<?php 
$subjectf2 = $_POST['subjectf2'];
$outputf = "{$subjectf2}";
file_put_contents("iframe2.txt",$outputf);

?>