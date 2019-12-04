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
<h2><b>Byłeś już u nas? Dodaj opinię!</b></h2>
		<form method="post" action="opinie.php">
<label>Imię:  </label><input type="text" name="name" placeholder="Twoje imię" required autofocus><br>
<label>Data odwiedzin:  </label><input type="date" name="date" min="2018-05-12" required><br>
<label>Email:  </label><input type="text" name="email" required><br>
<textarea rows="7" cols="50" name="comment" required>Wpisz komentarz... </textarea><br>
<input type="submit" name="komentuj" value="Wyślij">
</form>
<h1><b>
<?php
include('config.php');

	
if(isset($_POST['name'])){
	$n=$_POST['name'];
	$d=$_POST['date'];
	$e=$_POST['email'];
	$c=$_POST['comment'];
	$quarry= "INSERT INTO comments VALUES('','$n','$d','$e', '$c');";
	mysqli_query($connect,$quarry);	
	echo "Dodano opinię!"."<br>";
}

?></b></h1>
<?
$username="kpanik";
$password="myiIU3t5aUPsql";
$database="kpanik";

mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die("Nie odnaleziono bazy danych");
$query="SELECT * FROM comments";
$result=mysql_query($query);

$num=mysql_num_rows($result);

mysql_close();

echo "Opinie:<br><br>";

$i=0;
while ($i<$num) {

$name=mysql_result($result,$i,"name");
$date=mysql_result($result,$i,"date");
$comment=mysql_result($result,$i,"comment");



echo "<b>Imię: $name </b><br>Data rezerwacji: $date<br>Opinia: $comment<br><hr><br>";

$i++;
}

?>


			
			<br/><br/><br/><br/><br/>
			<div class="footer">Kinowow- Kraków, ul. Długa 48<br/>
			</div>
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