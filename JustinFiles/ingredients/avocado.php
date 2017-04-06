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
      <title>Avocado Page</title>
   </head>
   <body class="document">
      <div class="jumbotron">
         <h1>Advocado</h1>
         <p>Green super food</p>
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
                        <li class="active"><a href="./avocado.php">Avocado</a></li>
                        <li><a href="./plantain.php">Plantain</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <!--<li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
                
                
                
                <?php
//                 if(isset($_SESSION["isLoggedIn"]
//                 {
// //                     echo "You must log in to comment"
//                 }
//                 else
//                 {
                
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
//                     }
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
                    Avocados are known as a Super Food due to many of their nutritional characteristics. These include:
                    <ul class="benefits">
                        <li> High in healthy fats which are good for the heart </li>
                        <li> High in potassium (even more than a banana) </li>
                        <li> Packed with fiber </li>
                        <li> High in antioxidants </li>
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
                    <h2> Description </h2>
                     <p>
                        The avocado (Persea americana) is a tree that is native to South Central Mexico, classified as a member of the flowering plant family Lauraceae. Avocado (also alligator pear) also refers to the tree's fruit, which is botanically a large berry containing a single seed.

                        Avocados are commercially valuable and are cultivated in tropical and Mediterranean climates throughout the world. They have a green-skinned, fleshy body that may be pear-shaped, egg-shaped, or spherical. Commercially, they ripen after harvesting. 
                        <br>
                        <br>
                        Avocados have a very subtle flavor that is 'green' and fresh with a hint of sweetness. In general, avocados tend to complement and accent other flavors that are present in food. The soft, almost creamy, texture is pleasant on the tongue. Avocados can be served in a variety of ways. 
                        <ul class="waysToEat">
                            <li> Sliced </li>
                            <li> Mashed/Spread </li>
                            <li> Cubed </li>
                            <li> Guacamole </li>
                        </ul>
                     </p>
                     </strong>
                     <br>
                     <p>
                        Description from Wikipedia.com
                     </p>
                  </strong>
               </div>
            </div>
            <div class="col-lg-4">
         <div class="hidden-sm hidden-xs ingImg">
            <img src="../images/avocado.jpg" class="ingImg" title="Mmmmm, Avocado" alt="Photo of Avocado" />
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

