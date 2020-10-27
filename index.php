<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "intermag");
	$text1="DELETE FROM tovar WHERE id=''";
	mysqli_query($connect, $text);
	$text2="DELETE FROM more WHERE id='7'";
	mysqli_query($connect, $text2);

?>