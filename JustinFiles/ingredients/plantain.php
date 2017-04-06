<!DOCTYPE html>
<html lang="en">
   <head>
       <?php
    session_start();
    session_name('theSession');
?>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../css/index.css">
      <title>Plantain Page</title>
   </head>
   <body class="document">
      <div class="jumbotron">
         <h1>Plantain</h1>
         <p>Like a banana but different</p>
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
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../about/about.html">About</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients 
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="./ginger.php">Ginger</a></li>
                        <li><a href="./avocado.php">Avocado</a></li>
                        <li class="active"><a href="./plantain.php">Plantain</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
               
               <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == false)
                    {
                ?>
                  <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    
                 <?php
                    }
                    ?>
                    <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == true)
                    {
                ?>
                      ?>  
                  <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
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
                <strong>
                <h2>Benefits</h2>
                <p>
                    Plantains, a form of a banana, have many beneficial properties. These include:
                    <ul class="benefits">
                        <li> High in Vitamin-C </li>
                        <li> High in Vitamin-A </li>
                        <li> High in Vitamin-B6 which helps prevent coronary artery disease and stroke risk </li>
                        <li> Can help lower the risk of heart problems </li>
                    </ul>
                    </strong>
                    <br>
                    <br>
                    Benefits from authoritynutrition.com
                </p>
               <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == true)
                    {
                ?>
                <strong>
                        <p>
                        Comments:
                        </p>
                            <textarea rows="4" cols="50" name="comment" form="usrform">
                            Enter text here...</textarea>
                    </strong>
                      <input type='submit' class='submit' value='Submit' name='sub' />
                    
                 <?php
                    }
                    ?>  
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">
                  <strong>
                     <p>
                        Plantains, also known as plátanos, are closely related cultivars of fruit or dessert banana. In general, they treated as vegetables in the kitchen much like fellow tropical produces such as potatoes, taro, breadfruit, yam, sweet potatoes, etc. Indeed, plátano are one of the staple sources of carbohydrates for larger populations in Asia, Oceania, Africa, and Central Americas for centuries served in main meals.
                        <br>
                        As in the bananas, plantain too belongs to the Musaceae family. In their natural habitat, plátano was thought to have developed by hybridization of two wild species of Musaceae, Musa acuminata Colla (AA) and M. balbisiana Colla (BB), and consist of chromosomal triploid AAB genome.
                     </p>
                  </strong>
                  <br>
                    <p>
                        http://www.nutrition-and-you.com/plantains.html
                    </p>
                    <br>
               </div>
            </div>
            <div class="col-lg-4">
         <div class="hidden-sm hidden-xs ingImg">
            <img src="../images/plantain.jpg" class="ingImg" title="Mmmmm, Plantains" alt="Photo of Plantain" />
            <p> Image from pixabay.com </p>
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

