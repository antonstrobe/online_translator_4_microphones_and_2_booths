<!doctype html>
<html lang="ru">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://dfvote40.gq/styles.css">

	<title>1</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<div id="ajaxDiv_1"></div>
<div id="ajaxDiv_2"></div>
<div id="ajaxDiv_3"></div>
<div id="ajaxDiv_4"></div>
<script>

var form_1 = ("B");
var form_2 = ("B");
var micro1 = ("closed");
var micro2 = ("open");

var id1=$(this).attr('id1');$.ajax({type:"POST",url:'form.txt',data:'id1='+id1,dataType:'html',
success:function(data){	response1 = data.split("~");
$('#ajaxDiv_1').html(data); }, });

var id2=$(this).attr('id2');$.ajax({type:"POST",url:'form2.txt',data:'id2='+id2,dataType:'html',
success:function(data){	response2 = data.split("~");
$('#ajaxDiv_2').html(data); }, });

var id3=$(this).attr('id3');$.ajax({type:"POST",url:'micro.txt',data:'id3='+id3,dataType:'html',
success:function(data){	response3 = data.split("~");
$('#ajaxDiv_3').html(data); }, });

var id4=$(this).attr('id4');$.ajax({type:"POST",url:'micro2.txt',data:'id4='+id4,dataType:'html',
success:function(data){	response4 = data.split("~");
$('#ajaxDiv_4').html(data); 
if ((response1 == form_1) && (response2 == form_2) && (response3 == micro1) && (response4 == micro2)){
	alert(5);
}}, });




</script>

