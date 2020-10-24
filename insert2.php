<?php
	$connect=mysqli_connect("127.0.0.1","root","", "intermag");
	$text_zaprosa_vstavit= "INSERT INTO more (title, inf, img, price) 
							VALUES('{$_GET["title"]}', '{$_GET["inf"]}', '{$_GET["img"]}', '{$_GET["price"]}')";
	$zapros_vstavit=mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location:index.php');
?>