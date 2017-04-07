<?php
session_start();
?>

<?php
	include 'header.php';
	include 'dbconnect.php';


	$ingredients = $dbh->query("SELECT * FROM INGREDIENTS");
//	$ingredients->fetchColumn();


	echo '<div id="contents">';
	
	
	
	foreach( $ingredients as $row) {
		echo '<div class="col-lg-2 col-md-2 ingredients" align="center">';
		echo '<a href="ingredient.php?name=' . $row["name"] . '">';
                             echo  '<img src="images/' . $row["image"] . '" class="img-rounded" alt="ingredient1" style="width:150px;height:150px;border:3;">';
                       echo ' </a>';
			echo '<p>'. $row["name"] . '</p>';
	echo '</div>';
	
	}

	



	echo "</div>";
?>	
<?php 
	include 'footer.php'; 
		
?>
	

