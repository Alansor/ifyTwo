<?php
session_start();
?>

<?php
	include 'header.php';
	include 'dbconnect.php';
?>

	 <div id="contents">
		

		<div class="col-lg-10 col-md-10">
			<h2 style="text-align:center;margin-left:15%;font-family: 'Alegreya', serif;"> <b>Welcome, Enjoy our Always Fresh Ingredients!</b></h2>
			
			<div style="display: flex; justify-content: center;margin-left:15%;"><img src="http://www.publicdomainpictures.net/pictures/30000/velka/fresh-vegetables.jpg" class="img-circle img-responsive" style="width:800px;height:600px;"></div>

		</div>

		<div class="col-lg-2 col-md-2 ingredients" align="center">
			<h4 style="text-align:center">Check out our new ingredients<h4>
			<a href="ingredient1.php">
				<img src="images/chive.jpg" class="img-rounded" alt="ingredient1" style="width:150px;height:150px;border:3;">
			</a>
			<p>Chives</p>

			 <a href="ingredient2.php">
				<img src="images/swiss.jpg" class="img-rounded" alt="ingredient2" style="width:150px;height:150px;border:3;">
			</a>
			<p>Swiss Chard</p>	

			 <a href="ingredient3.php">
				<img src="images/horseradish.jpg" class="img-rounded" alt="ingredient3" style="width:150px;height:150px;border:3;">
			</a>
			<p>Horseradish</p>

		</div>


	</div>
	
<?php 
	include 'footer.php'; 
		
?>
	

