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
      <title>Ginger Page</title>
   </head>
   <body class="document">
      <div class="jumbotron">
         <h1>Ginger</h1>
         <p>It's good for you.</p>
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
                        <li class="active"><a href="./ginger.php">Ginger</a></li>
                        <li><a href="./avocado.php">Avocado</a></li>
                        <li><a href="./plantain.php">Plantain</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <!--<li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
                  
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
                  <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                 <?php
                    }
                    ?>
               </ul>
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
                    Ginger has both medicinal and culinary uses. It is valued for it unique flavor and its health benefits alike. These include:
                    <ul class="benefits">
                        <li> Nausea and gastrointestinal relief </li>
                        <li> Muscle soreness reduction </li>
                        <li> Anti-Inflammatory </li>
                        <li> Can help lower risk of infections </li>
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
                        Ginger (Zingiber officinale) is a flowering plant whose rhizome, ginger root or simply ginger, is widely used as a spice or a folk medicine.

                        It is a herbaceous perennial which grows annual stems about a meter tall bearing narrow green leaves and yellow flowers. Ginger is in the family Zingiberaceae, to which also belong turmeric (Curcuma longa), cardamom (Elettaria cardamomum), and galangal. 
                        </br>
                        Ginger originated in the tropical rainforest in Southern Asia. Although ginger no longer grows wild, it is thought to have originated on the Indian subcontinent because the ginger plants grown in India show the largest amount of genetic variation. Ginger was exported to Europe via India in the first century AD as a result of the lucrative spice trade and was used extensively by the Romans.
                        <br>
                        <br>
                        The flavor of ginger is very unique. It is a warm and sharp flavor with a pungent but pleasant aroma. Ginger has has a spicyness to it, though not in the same way as a pepper. The most common uses are in soups, stir fry, and baked goods.
                     </p>
                  </strong>
                     <br>
                     <p>
                        Description from Wikipedia.com
               </div>
            </div>
            <div class="col-lg-4">
               <div class="hidden-sm hidden-xs ingImg">
                  <img src="../images/ginger.jpg" class="ingImg" title="Mmmmm, Ginger" alt="Photo of Ginger Root" />
                  <p> Image from pixabay.com </p>
               </div>
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

