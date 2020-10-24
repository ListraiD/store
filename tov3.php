<?php
	$connect=mysqli_connect("127.0.0.1","root","", "intermag");
	$text_zapros= 'SELECT * FROM more';
	$zapros=mysqli_query($connect, $text_zapros);
	$res1=$zapros->fetch_assoc();
	$res2=$zapros->fetch_assoc();	
	$res3=$zapros->fetch_assoc();
	$res4=$zapros->fetch_assoc();
	$res5=$zapros->fetch_assoc();	
	$res6=$zapros->fetch_assoc();									
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>
	<div style="background: #000000" class=" col-12 pr-0 pl-0">
		<div  class=" col-10 mx-auto">
			<div class="row">
				<div style="" class="col-1">
					<img class="w-100" src="log1.png">
				</div>
				<div  class="col-7 border">
					<div class="row">
						<div class="col-6">
							<a style="color: white" href="http://urok16/admin.php">создать товар</a>
							
						</div>
						<div class="col-6">
							<a style="color: white" href="http://urok16/admin.php">создать товар на больше</a>
							
						</div>
					</div>
				</div>
				<div  class="col-4">
					<div class="col-6 mx-auto">
						<img style="height: 80px" class="w-100"  src="logo.png">
					</div>
						
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-10 mx-auto">
		<div class="row mt-5">
			<div class="col-4 ">
				<div  class="col-11 mx-auto">
					<?php
						echo "<img class='w-100' src='".$res3['img']."' >";
					?>
				</div>
			</div>
			<div class="col-8">
				<div class="col-11 mx-auto">
					<?php
						echo "<h1 class=''>".$res3['title']."</h1>";
					?>
				</div>
				<div class="col-11 mx-auto mt-3">
					<?php
						echo "<p class=''>".$res3['inf']."</p>";
					?>
				</div>
				<div class="col-11 mx-auto mt-3">
					<?php
						echo "<p class=''>".$res3['price']."</p>";
					?>
				</div>
				<div class="col-11 mx-auto mt-3">
					<a style="color: black;" href="index.php">назад</a>
				</div>
			</div>
		</div>
	</div>


</body>
</html>