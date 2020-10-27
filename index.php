<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="utf-8">
<head>
	<?php
		$connect=mysqli_connect("127.0.0.1","root","", "intermag");
									
		$text_zapros= 'SELECT * FROM tovar';
		$zapros=mysqli_query($connect, $text_zapros);
		$res1=$zapros->fetch_assoc();
		$res2=$zapros->fetch_assoc();	
		$res3=$zapros->fetch_assoc();
		$res4=$zapros->fetch_assoc();
		$res5=$zapros->fetch_assoc();	
		$res6=$zapros->fetch_assoc();

		$blog=["http://urok16/tov1.php", "http://urok16/tov2.php", "http://urok16/tov3.php", "http://urok16/tov4.php", "http://urok16/tov5.php", "http://urok16/tov6.php"];
		
	?>
							
	
	<title></title>
</head>
<body >
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
	<div style="" class=" col-12 mt-2 pr-0 pl-0">
		<div style="" class=" col-10 mx-auto">
			<div class="row">
				<div style=" background: #000000" class="col-7 ">
					<div class="mx-auto col-9 mt-5">
						<img  src="image.png">
					</div>
				</div>	
				<div style="" class=" col-5 ">
					<img src="g.png">
				</div>	
			</div>
		</div>

	</div>
	<div style="" class="col-10 mx-auto mt-2 pr-0 pl-0 ">
		<div style="" class=" col-12 mx-auto">
			<div class="d-flex">
				<div style="" class="col-4 ">
					<?php
						echo "<h1 class=''>".$res1['title']."</h1>";
						echo "<p class=''>".$res1['inf']."</p>";
						echo "<img class='w-100' src='".$res1['img']."' >";
						echo "<p class=''>".$res1['price']."</p>";
						echo "<a href=".$blog[0].">читать далее</a>";
					?>
				</div>
				<div style="" class="col-4 ">
					<?php
						echo "<h1 class=''>".$res2['title']."</h1>";
						echo "<p class=''>".$res2['inf']."</p>";
						echo "<img class='w-100' src='".$res2['img']."' >";
						echo "<p class=''>".$res2['price']."</p>";
						echo "<a href=".$blog[1].">читать далее</a>";
					?>
				</div>
				<<div style="" class="col-4 ">
					<?php
						echo "<h1 class=''>".$res3['title']."</h1>";
						echo "<p class=''>".$res3['inf']."</p>";
						echo "<img class='w-100' src='".$res3['img']."' >";
						echo "<p class=''>".$res3['price']."</p>";
						echo "<a href=".$blog[2].">читать далее</a>";
					?>
				</div>
			</div>
		</div>
		<div  class="col-12 mx-auto mt-3">
			<div class="d-flex">
				<div style="" class="col-4 ">
					<?php
						echo "<h1 class=''>".$res4['title']."</h1>";
						echo "<p class=''>".$res4['inf']."</p>";
						echo "<img class='w-100' src='".$res4['img']."' >";
						echo "<p class=''>".$res4['price']."</p>";
						echo "<a href=".$blog[3].">читать далее</a>";
					?>
				</div>
				<div style="" class="col-4 ">
					<?php
						echo "<h1 class=''>".$res5['title']."</h1>";
						echo "<p class=''>".$res5['inf']."</p>";
						echo "<img class='w-100' src='".$res5['img']."' >";
						echo "<p class=''>".$res5['price']."</p>";
						echo "<a href=".$blog[4].">читать далее</a>";
					?>
				</div>
				<div style="" class="col-4 ">
					<?php
						echo "<h1 class=''>".$res6['title']."</h1>";
						echo "<p class=''>".$res6['inf']."</p>";
						echo "<img class='w-100' src='".$res6['img']."' >";
						echo "<p class=''>".$res6['price']."</p>";
						echo "<a href=".$blog[5].">читать далее</a>";
					?>
				</div>
			</div>
		</div>

	</div>
	


</body>
</html>