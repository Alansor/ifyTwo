<!DOCTYPE html>
<html lang="en">
   <head>

       <?php
    session_start();
    session_destroy();
    session_unset();
    $_SESSION = array();
    header("Location: ../index.php");
    
?>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../css/index.css">
      <title>Logout</title>
   </head>
   <body class="document">
      <div class="jumbotron">
         <h1>You have logged out</h1>
      </div>
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
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav">
                  <li><a href="../index.html">Home</a></li>
                  <li><a href="../about/about.html">About</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients 
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="../ingredients/ginger.php">Ginger</a></li>
                        <li class="active"><a href="../ingredients/avocado.php">Avocado</a></li>
                        <li><a href="../ingredients/plantain.php">Plantain</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == false)
                    {
                ?>
                  <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    
                 <?php
                    }
                    ?>
                    <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == true)
                    {
                ?>
                      ?>  
                  <li class="active"><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                 <?php
                    }
                    ?>
               </ul>
            </div>
         </div>
         </div>
         </div>
      </nav>
      <div class="container-fluid">
      <div class="row visible-on">
            <div class="col-md-4"></div>
         </div>
         <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">
                   

               </div>
            </div>
            <div class="col-lg-4">
         <div class="hidden-sm hidden-xs ingImg">
           
        </div>
      </div>
       <footer>
           <center>
               <hr>
               <p>This site is part of a CSU <a href="www.cs.colostate.edu/~ct310">CT310</a> Course Project. &copy; Copyright 2017, Team18</p>
            <hr>
            </center>
      </footer>
   </body>
</html>

