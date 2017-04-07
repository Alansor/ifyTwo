<!DOCTYPE html>
<?php
$host = $_SERVER ['HTTP_HOST'];
$uri = rtrim ( dirname ( $_SERVER ['PHP_SELF'] ), '/\\' );
?>

<html lang="en">
        <head>
        
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="custom.css">
                <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
                <title>Project 2</title>





                <div class="header">


        <!-- Use the jumbotron for creating the header for the webpage -->

                <div class="jumbotron">
                        <div class= "page-header" style="font-family: 'Alegreya', serif;">
                                <h1 style="margin-left:-150px;"><img src="tree.png" id="logo" />Amazing Ingredients Co.</h1>
                               <p>bringing you the best..</p> 
                        </div>
                </div>

<body>

 <!-- Create the collapsing navigation bar -->

                <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                                <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="https://www.cs.colostate.edu/~ct310/yr2017sp/">CT 310</a>
                                </div>




                        <div class="collapse navbar-collapse" id="myNavbar" style="font-family: 'Playfair', serif;" >
                                <ul class="nav navbar-nav">
                                        <li><a href="index.php">Home</a></li>

                                        <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients</a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="ingredient1.php">Chives</a></li>
                                                        <li><a href="ingredient2.php">Swiss Chard</a></li>
                                                        <li><a href="ingredient3.php">Horseradish</a></li>
                                                </ul>
                                        </li>

					<li><a href="about.php">About</a></li>\

                              </ul>	
				<ul class="nav navbar-nav navbar-right">
				
					<?php
						if(!isset($_SESSION['user'])){
							echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
						}else{
							echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
						}
						
					?>
				</ul>
			</div>
	        </div>

        </nav>

