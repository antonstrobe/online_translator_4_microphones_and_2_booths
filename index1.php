<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://dfvote40.gq/styles.css">
	<title>1</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<style>
		#ajax_form{ color: #000; font-size: 24px; font-weight: 700; text-align: center; animation:blur 
			2.199s ease-out infinite;text-shadow:text-shadow: #000;}

			#ajax_form2{ color: #000; font-size: 24px; font-weight: 700; text-align: center; animation:blur 
				2.99s ease-out infinite;text-shadow:text-shadow: #000;}

				@keyframes blur{from{text-shadow:0px 0px 10px #fff,	0px 0px 1px #fff, 0px 0px 2px #fff, 0px 0px 2px #fff,
					0px 0px 2px #fff, 0px 0px 2px #fff,	0px 0px 2px #fff, 0px 0px 2px #fff,	0px 0px 5px #fff, 0px 0px 5px #fff,
					0px 0px 5px #7B96B8, 0px 0px 15px #7B96B8, 0px 10px 10px #7B96B8, 0px 10px 10px #7B96B8, 0px 10px 10px #7B96B8,
					0px 10px 10px #7B96B8, 0px -10px 10px #7B96B8, 0px -10px 10px #7B96B8;}}
				</style>

				<script>
					function onclicers() {

						var id1=$(this).attr('id1');$.ajax({type:"POST",url:'form.txt',data:'id1='+id1,dataType:'html', success:function(data){	form_1k_ajax = data.split("~");
							$('#ajaxDiv_1').html(data); }, });

						var id2=$(this).attr('id2');$.ajax({type:"POST",url:'form2.txt',data:'id2='+id2,dataType:'html', success:function(data){	form_2k_ajax = data.split("~");
							$('#ajaxDiv_2').html(data); }, });

						var id3=$(this).attr('id3');$.ajax({type:"POST",url:'micro.txt',data:'id3='+id3,dataType:'html', success:function(data){	micro_1k_ajax = data.split("~");
							$('#ajaxDiv_3').html(data); }, });

						var id4=$(this).attr('id4');$.ajax({type:"POST",url:'micro2.txt',data:'id4='+id4,dataType:'html', success:function(data){	micro_2k_ajax = data.split("~");
							$('#ajaxDiv_4').html(data); }, });

						var id5=$(this).attr('id5'); $.ajax({	type:"POST", url:'form.txt', data:'id5='+id5,	dataType:'html', success:function(data){ $('#ajax_form').html(data); },	}); 

						var id6=$(this).attr('id6'); $.ajax({	type:"POST", url:'form2.txt', data:'id6='+id6,	dataType:'html', success:function(data){ $('#ajax_form2').html(data); },	}); 
					}
					onclicers();

					function iframe2() {
						var id8=$(this).attr('id8');$.ajax({type:"POST",url:'iframe.txt',data:'id8='+id8, dataType:'html', success:function(data){	ajax8 = data.split("~");
							$('#ajax_ifarme2').html(data); }, }); }
						iframe2();
					</script>

					<div style="text-align: center;"><div id="ajax_ifarme2"></div>
					<div style="text-align: center;">
						<table style="text-align: center;" border="1">

							<tr>
								<th><a href="http://dfvote40.gq/form.txt"><div style="color: red; margin: 0 70px 0 70px; text-align: center;" id="ajaxDiv_1"> </div></a><br></th>
								<th><a href="http://dfvote40.gq/form2.txt"><div style="color: red; margin: 0 70px 0 70px; text-align: center;" id="ajaxDiv_2"> </div></a><br></th>
								<th><a href="http://dfvote40.gq/micro.txt"><div style="color: red; margin: 0 70px 0 70px; text-align: center;" id="ajaxDiv_3"> </div></a><br></th>
								<th><a href="http://dfvote40.gq/micro2.txt"><div style="color: red; margin: 0 70px 0 70px; text-align: center;" id="ajaxDiv_4"> </div></a><br></th>
							</tr>
							<tr style="text-align: center;"><td style="color: green; margin: 0 70px 0 70px; text-align: center;">Язык form- 1</a> </td>
								<td style="color: green; margin: 0 70px 0 70px; text-align: center;">Язык form2 - 2</a> </td>
								<td style="color: green; margin: 0 70px 0 70px; text-align: center;">Кабина - 1</td>
								<td style="color: green; margin: 0 70px 0 70px; text-align: center;">Кабина - 2</td>
							</tr>
						</table>
<!-- <ul style="color: #c8a6ff;" class="button-group">
<li><button style="margin-right: 20px;" class="button" onclick="count_open_k1()" value="OPEN - кабина 1">OPEN - кабина 1</button></li>
<li><button style="margin-right: 20px;" class="button" onclick="count_closed_k1()" value="CLOSED - кабина 1">CLOSED - кабина 1</button></li>
<li><button style="margin-right: 20px;" class="button" onclick="count_a_k1()" value="A - кабина 1">A - кабина 1</button></li>
<li><button style="margin-right: 20px;" class="button" onclick="count_b_k1()" value="B - кабина 1">B - кабина 1</button></li>
<br>
<br>
<li></li>
<br>
<li><button style="margin-right: 20px;" class="button" onclick="count_open_k2()" value="OPEN - кабина 2">OPEN - кабина 2</button></li>
<li><button style="margin-right: 20px;" class="button" onclick="count_closed_k2()" value="CLOSED - кабина 2">CLOSED - кабина 2</button></li>
<li><button style="margin-right: 20px;" class="button" onclick="count_a_k2()" value="A - кабина 2">A - кабина 2</button></li>
<li><button style="margin-right: 20px;" class="button" onclick="count_b_k2()" value="B - кабина 2">B - кабина 2</button></li>
<br><br>

</ul> -->
<?php
$section = file_get_contents('http://dfvote40.gq/vol.txt');
$form = file_get_contents('http://dfvote40.gq/form.txt');
$micro_txt = file_get_contents('http://dfvote40.gq/micro.txt');
$micro_null = ('closed');
$micro_1_closed = ('closed');
$micro_1_open = ('open');
$color = ('#B7B7B7FF');
$form_txt = file_get_contents('http://dfvote40.gq/form.txt');
$form2_txt = file_get_contents('http://dfvote40.gq/form2.txt');
$micro2_txt = file_get_contents('http://dfvote40.gq/micro.txt');
?>
<div><h2>кабина 1</h2></div>

<div style="font-size: 30px; text-align: center;"><div id="ajax_form"></div></div><br>
<ul class="button-group">
	<li><button style="margin-right: 20px;" class="button">a</button></li>
	<li><button style="margin-right: 20px;" class="button">b</button></li>
	<li><button style="margin-right: 20px;" class="button">c</button></li>
	<li><button style="margin-right: 20px;" class="button">d</button></li>
	<li><button style="margin-right: 140px;" class="button">e</button></li>
	<li>
		<form style="float: right;" id="stack_A_k1" method="POST" action="">
			<input style="display: none;" name="subject" type="text" value="A" >
			<button style="margin-left: 140px;" class="green button" type="button" value="true" onclick='count_a_k1()'>A</button>
		</form>
	</li>
	<li>
		<form style="float: left;" id="stack_B_k1" method="POST" action="">
			<input style="display: none;" name="subject" type="text" value="B" >
			<button style="margin-left: 20px;" class="red button" type="button" value="true" onclick='count_b_k1()'>B</button>
		</form>
	</li></ul><br>
	<div id="ajaxDiv_micro"></div>

	<div style="display: none;">
		<div>кабина 2</div>
		<div style="font-size: 30px; text-align: center;"><div id="ajaxDiv_2"></div></div><br>
		<ul class="button-group">
			<li><button style="margin-right: 20px;" class="button">a</button></li>
			<li><button style="margin-right: 20px;" class="button">b</button></li>
			<li><button style="margin-right: 20px;" class="button">c</button></li>
			<li><button style="margin-right: 20px;" class="button">d</button></li>
			<li><button style="margin-right: 140px;" class="button">e</button></li>
			<li>
				<form style="float: right;" id="stack_A_k1" method="POST" action="">
					<input style="display: none;" name="subject" type="text" value="A" >
					<button style="margin-left: 140px;" class="green button" type="button" value="true" onclick='count_a_k2()'>A</button>
				</form>
			</li>
			<li>
				<form style="float: left;" id="stack_B_k1" method="POST" action="">
					<input style="display: none;" name="subject" type="text" value="B" >
					<button style="margin-left: 20px;" class="red button" type="button" value="true" onclick='count_b_k2()'>B</button>
				</form>
			</li></ul><br>
			<div id="ajaxDiv_micro2"></div>
		</div>
		<script>

			function saves_A_k1() { var form = document.querySelector('#stack_A_k1'); var data = new FormData(form);
			var req = new XMLHttpRequest();	req.open("POST", "form-write.php", true); req.send(data);
			iFrame.contentWindow.postMessage("o1", "*"); 
			for (var i = 0; i < 7; i++) { onclicers();}}

				iFrame.contentWindow.postMessage("2", "*"); 
			function saves_B_k1() { var form = document.querySelector('#stack_B_k1'); var data = new FormData(form);
			var req = new XMLHttpRequest();	req.open("POST", "form-write.php", true); req.send(data);
			iFrame.contentWindow.postMessage("o1", "*"); 
			for (var i = 0; i < 7; i++) { onclicers();} }

				function saves_A_k2() { var form = document.querySelector('#stack_A_k2'); var data = new FormData(form);
			var req = new XMLHttpRequest();	req.open("POST", "form-write2.php", true); req.send(data); 
			iFrame.contentWindow.postMessage("2", "*"); 
			for (var i = 0; i < 2; i++) {onclicers();}}

				function saves_B_k2() { var form = document.querySelector('#stack_B_k2'); var data = new FormData(form);
			var req = new XMLHttpRequest();	req.open("POST", "form-write2.php", true); req.send(data);
			iFrame.contentWindow.postMessage("2", "*"); 
			for (var i = 0; i < 3; i++) { onclicers();} }

				function save_micro_txt_open_1k() {var form = document.querySelector('#stack_save_micro_txt_open_1k');var data = new FormData(form);var req = new XMLHttpRequest();
			req.open("POST", "micro.php", true);req.send(data);
			iFrame.contentWindow.postMessage("open_1", "*");
			iFrame.contentWindow.postMessage("o1", "*");
			for (var i = 0; i < 3; i++) { txt1_ajax_pylt_open(); onclicers(); }}

				function save_micro_txt_closed_1k() { var form = document.querySelector('#stack_save_micro_txt_closed_1k'); var data = new FormData(form); var req = new XMLHttpRequest(); req.open("POST", "micro.php", true); req.send(data);
			iFrame.contentWindow.postMessage("closed_1", "*"); 
			iFrame.contentWindow.postMessage("o1", "*"); 
			for (var i = 0; i < 3; i++) { txt2_ajax_pylt_closed(); onclicers();} }

				function save_micro_txt_open_2k() { var form = document.querySelector('#stack_save_micro_txt_open_2k'); var data = new FormData(form); var req = new XMLHttpRequest(); req.open("POST", "micro2.php", true); req.send(data);onclicers(); txt1_ajax_pylt_open2();
			iFrame.contentWindow.postMessage("open_2", "*"); 
		}

		function save_micro_txt_closed_2k() { var form = document.querySelector('#stack_save_micro_txt_closed_2k'); var data = new FormData(form); var req = new XMLHttpRequest(); req.open("POST", "micro2.php", true); req.send(data); 
		iFrame.contentWindow.postMessage("closed_2", "*"); 
		onclicers(); txt2_ajax_pylt_closed2(); 
	}

	function txt1_ajax_pylt_open(){	var id=$(this).attr('id'); $.ajax({	type:"POST", url:'1.txt', data:'id='+id, 
		dataType:'html', success:function(data){ $('#ajaxDiv_micro').html(data);},});}

	function txt2_ajax_pylt_closed(){ var id=$(this).attr('id'); $.ajax({ type:"POST", url:'2.txt',	data:'id='+id,
		dataType:'html', success:function(data){ $('#ajaxDiv_micro').html(data); }, }); }


	function txt1_ajax_pylt_open2(){	var id=$(this).attr('id'); $.ajax({	type:"POST", url:'3.txt', data:'id='+id, 
		dataType:'html', success:function(data){ $('#ajaxDiv_micro2').html(data);},});}

	function txt2_ajax_pylt_closed2(){ var id=$(this).attr('id'); $.ajax({ type:"POST", url:'4.txt',	data:'id='+id,
		dataType:'html', success:function(data){ $('#ajaxDiv_micro2').html(data); }, }); }


	function count_a_k1() {
		saves_A_k1();
	}

	function count_b_k1() {
		if ((micro_1k_ajax == "open") && (micro_2k_ajax == "open") && (form_2k_ajax == "B")){
			save_micro_txt_closed_2k();
			saves_B_k1(); 
		}
		else {
			saves_B_k1(); 
		}}

		function count_open_k1() {
			if (((form_1k_ajax) == "B") && ((form_2k_ajax) == "B")) {
				save_micro_txt_closed_2k();
				save_micro_txt_open_1k();
			} 
			if (((form_1k_ajax && form_2k_ajax) == "B") && ((micro_1k_ajax || micro_2k_ajax) == "open")) {

				save_micro_txt_open_1k();
			} 
			if ((micro_1k_ajax || micro_2k_ajax) == ("closed" || "open") && (form_1k_ajax || form_2k_ajax) == "A") {
				save_micro_txt_open_1k();
			}
			else {
				save_micro_txt_open_1k(); 
			}}

			function count_closed_k1() {
				save_micro_txt_closed_1k();
			}

			function count_a_k2() {
				saves_A_k2();
			}

			function count_b_k2() { 

				if (micro_1k_ajax == "open" && micro_2k_ajax == "open" && form_1k_ajax == "B") {
					save_micro_txt_closed_1k();
					saves_B_k2();
				} else {
					saves_B_k2(); 
				}}

				function count_open_k2() {
					if (((form_1k_ajax) == "B") && ((form_2k_ajax) == "B")){
						save_micro_txt_closed_1k();
						save_micro_txt_open_2k();
					} if ((micro_1k_ajax || micro_2k_ajax) == ("closed" || "open") && (form_1k_ajax || form_2k_ajax) == "A") {
						save_micro_txt_open_2k();
					}
					else {
						save_micro_txt_open_2k(); 
					}}

					function count_closed_k2() {
						save_micro_txt_closed_2k(); 
					}
					iframe2();
				</script>

				<?php if ((file_get_contents('http://dfvote40.gq/micro.txt') == ('closed'))) {
					echo '<script>txt2_ajax_pylt_closed();</script>';} 
					if ((file_get_contents('http://dfvote40.gq/micro.txt') == 'open')) {
						echo '<script>txt1_ajax_pylt_open();</script>'; }?>
						<?php if ((file_get_contents('http://dfvote40.gq/micro2.txt') == ('closed'))) {
							echo '<script>txt2_ajax_pylt_closed2();</script>';} 
							if ((file_get_contents('http://dfvote40.gq/micro2.txt') == 'open')) {
								echo '<script>txt1_ajax_pylt_open2();</script>'; }?>
							</ul><br>
<!-- <div id="ajaxVol"></div>
<br>
<br><br>
<form id="stackoverflow" method="POST" action="" onchange="save_vol()">
<input style="width: 5%; transform: rotate(-90deg);" name="subject_v" value="<?php echo $section ?>" type="range" 
	class="form-range" id="customRange3" onclick='save_vol()'type="range" id="chanceSlider" min="0.01" max="98" step="0.01" style="background-color: #00aec8; width: 50%;">
</form><br> -->
<br>
<iframe style="display: none;" id="iFrame" src="https://translator2021.herokuapp.com/control.html"></iframe>
<script>
	/*var str1 = ('var button = document.getElementById("postMessage'); 
		var str2 = ('");var iFrame = document.getElementById("iFrame");button.addEventListener("click", function(){iFrame.contentWindow.postMessage("o');
			var str4 = ('", "*"); })');
				for (let i = 1; i < 14; i++) { 
					eval(str1+i+str2+i+str4);}*/
					window.onmessage = function(event) {

						if (event.data == '2') {
							onclicers(); }

							if (event.data == 'iframe_1') {
								iframe2(); }

								if (event.data == 'open_2') { 
									txt1_ajax_pylt_open2(); onclicers();
								}
								if (event.data == 'closed_2') {
									txt2_ajax_pylt_closed2(); onclicers();
								}
								if (event.data == 'o1') {
									onclicers();  }
									if (event.data == 'open_1') {
										txt1_ajax_pylt_open(); onclicers();
									}
									if (event.data == 'closed_1') {
										txt2_ajax_pylt_closed(); onclicers();
									}
								};

								onclicers();
								iframe2();
							</script>
							<div style="display: none;">
								<form id="stack_save_micro_txt_closed_1k" method="POST" action="">
									<input style="display: none;" name="subject_micro" type="text" value="closed" >
									<button style="border-radius: 25px" class="red button" type="button" value="true" onclick='save_micro_txt_closed_1k()'> Micro закрыть кабина 1</button></form>

									<form id="stack_save_micro_txt_open_1k" method="POST" action="">
										<input style="display: none;" name="subject_micro" type="text" value="open">
										<button style="border-radius: 25px" class="green button" type="button" value="true" onclick='save_micro_txt_open_1k()'> Micro открыть кабина 1 </button></form>
										<form id="stack_A_k1" method="POST" action="" >
											<input style="display: none;" name="subject" type="text" value="A" >
											<button style="border-radius: 25px"class="green button" type="button" value="true" onclick='saves_A_k1()'>A</button>
										</form>

										<form id="stack_B_k1" method="POST" action="" >
											<input style="display: none;" name="subject" type="text" value="B" >
											<button style="border-radius: 25px" class="red button" type="button" value="true" onclick='saves_B_k1()'>B</button>
										</form>

										<br>
										<form id="stack_save_micro_txt_closed_2k" method="POST" action="" >
											<input style="display: none;" name="subject_micro" type="text" value="closed" >
											<button style="border-radius: 25px" class="red button" type="button" value="true" onclick='save_micro_txt_closed_2k()'> Micro закрыть кабина 2</button></form>

											<form id="stack_save_micro_txt_open_2k" method="POST" action="">
												<input style="display: none;" name="subject_micro" type="text" value="open">
												<button style="border-radius: 25px" class="green button" type="button" value="true" onclick='save_micro_txt_open_2k()'> Micro открыть кабина 2 </button></form>

												<form id="stack_A_k2" method="POST" action="" >
													<input style="display: none;" name="subject_k2" type="text" value="A" >
													<button style="border-radius: 25px"class="green button" type="button" value="true" onclick='saves_A_k2()'>A</button>
												</form>

												<form id="stack_B_k2" method="POST" action="" >
													<input style="display: none;" name="subject_k2" type="text" value="B" >
													<button style="border-radius: 25px" class="red button" type="button" value="true" onclick='saves_B_k2()'>B</button>
												</form>
											</div>

										</div>
									</div>
								</body>
								</html>

