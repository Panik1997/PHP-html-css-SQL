<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<title>Kinowow</title>
	
	<meta name="description" content="Kinowow- kino dla Ciebie!" />
	
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
</head>

<body>

		<div class="header">
			<div class="logo">
				<img src="kamera.png" style="float: left;  width: 20%; height: 20%;" alt="logo"/>
				<span style="color: orange">Kinowow</span>
				<div style="clear:both;"></div>
			</div>
		</div>
		
		<div class="nav">
			<ol>
				<li><a href="index.html">Strona główna</a></li>
				<li><a href="uwagi.php">Uwagi do firmy</a></li>
				<li><a href="opinie.php">Opinie</a></li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="onas.html">O nas</a></li>
			</ol>
		
		</div>
		
		<div class="container">
		<h1><b>Wyślij uwagę lub zastrzerzenie!</b></h1>
		<form method="post" action="uwagi.php">
<label>Imię: </label><input type="text" name="imie" placeholder="Twoje imię i nazwisko" required autofocus><br>
<label>Email: </label><input type="text" name="mail" required><br>
<textarea rows="7" cols="50" name="warning" required>Wpisz uwagę...</textarea><br>


<br>
<input type="submit" name="uwaga" value="Wyślij uwagę!" style="margin-bottom: 40px;">
</form>


<?php
include('config.php');
if(isset($_POST['imie'])){
	$n=$_POST['imie'];
	$e=$_POST['mail'];
	$c=$_POST['warning'];


	$quarry= "INSERT INTO uwagi VALUES('','$n','$e','$c');";
	mysqli_query($connect,$quarry);	
	
	echo "Dodano uwagę! "."<br>";
}


?>

		</div>
		
		
		
		
	<script src="jquery-1.11.3.min.js"></script>
	
	<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	</script>
</body>
</html>