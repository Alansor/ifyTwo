<!DOCTYPE html>
<html lang="en">
   <head>
    <?php
        session_start();
        session_name('theSession');
    ?>
      <!-- Add appropriate required meta tags needed for the responsive webpage using bootstrap -->
      <!-- Add required bootstrap CDN links for style sheet and required scripts -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="./css/index.css">
      <title>Ingredients For You</title>
   </head>
   <body class="document">
      <!-- Use the jumbotron for creating the header for the webpage -->
      <div class="jumbotron">
         <h1>Ingredients For You</h1>
         <p>Seriously Good Stuff.</p>
      </div>
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
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="./index.html">Home</a></li>
                  <li><a href="./about/about.html">About</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients 
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="./ingredients/ginger.php">Ginger</a></li>
                        <li><a href="./ingredients/avocado.php">Avocado</a></li>
                        <li><a href="./ingredients/plantain.php">Plantain</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
               <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == false)
                    {
                ?>
                  <li><a href="./login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    
                 <?php
                    }
                    ?>
                    <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == true)
                    {
                ?>
                      ?>  
                  <li><a href="./login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                 <?php
                    }
                    ?>
               </ul>
            </div>
         </div>
         </div>
      </nav>
      <!-- create three coulumn with lg and md size-->
      <div class="container-fluid">
         <div class="row visible-on">
            <div class="col-md-4"></div>
         </div>
         <div class="row">
            <div class="col-md-4">
                                    <h2>Welcome to our website!</h2>
                <h3>Here you can find information about certain ingredients for some reason.</h3>
                <p>
                    Nam auctor malesuada augue, vitae accumsan ligula tincidunt placerat. Fusce sapien ipsum, vulputate ac accumsan quis, tempus eget magna. Duis id dui sed neque sagittis aliquet quis sit amet nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vehicula turpis non nibh hendrerit, in laoreet lacus sollicitudin. Pellentesque sed ante eget turpis molestie dapibus. Aenean porta eu augue nec scelerisque.
                </p>
                <p>
                    Vestibulum at risus tristique, laoreet odio sed, volutpat urna. Duis laoreet purus quis ex tempor ultrices. Praesent nec tellus non nunc sagittis suscipit non at sapien. Aliquam dapibus, risus a imperdiet hendrerit, ante dolor dapibus sem, et consectetur leo ligula vitae risus. Fusce in ex tincidunt, mattis ex sed, pretium eros. Suspendisse potenti. Aliquam varius purus at tellus vestibulum auctor. Donec sit amet vulputate massa. Vivamus odio ante, vestibulum quis nunc sit amet, eleifend volutpat dolor. Nam in magna vitae tortor hendrerit consequat ac a libero. Vestibulum lobortis vel nisl a tincidunt. Pellentesque volutpat condimentum ante vitae rhoncus. Quisque semper suscipit lectus sed mattis. Proin nec porttitor ipsum. Etiam faucibus mauris ac lectus volutpat mollis. 
                </p>
            </div>
            <div class="col-md-4">
               <div class="bodyCenter">
                    <br><br><br><br><br><br><br>
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in viverra purus. Duis sodales dolor a est ultrices semper. Duis non lobortis quam. Vestibulum vel magna pharetra, placerat risus vel, laoreet est. Nullam ut metus leo. Morbi mauris nunc, sollicitudin at augue et, pretium euismod nibh. Mauris ullamcorper sagittis purus ac eleifend.
                    </p>
                    <p>
                        Aliquam dictum euismod tortor at porta. Sed molestie mi arcu, nec viverra erat auctor ut. Integer at rutrum nulla. Fusce risus orci, varius ac metus ut, maximus hendrerit purus. Vestibulum et augue nec neque varius condimentum. Fusce nec venenatis leo. Proin eget tincidunt justo, at mattis dolor. Pellentesque ultricies sapien at felis fringilla, nec volutpat eros volutpat. Integer congue purus vel mi ultricies, nec auctor leo aliquam.
                    </p>
                    <p>
                        Maecenas efficitur, eros suscipit luctus bibendum, felis nibh pharetra nisl, a elementum neque eros sit amet orci. Cras id pellentesque nisi. Aliquam sodales ipsum ac elit dictum tempor. Pellentesque gravida suscipit nunc, ut finibus ex vestibulum nec. Quisque hendrerit sed risus in dictum. Sed vel neque ut magna sagittis ultrices eget in justo. Ut a leo velit. Cras ac luctus tortor. Fusce vel ligula eu nisl blandit luctus. Pellentesque tempor aliquam tortor id iaculis. Nulla blandit mi vel risus finibus congue. Curabitur volutpat lectus vitae lectus pellentesque, id volutpat augue feugiat. Nam mauris sem, feugiat id est eget, mattis blandit nulla. Aenean eget mollis leo.
                    </p>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="hidden-sm hidden-xs">
                 <center>
                   <a href="./ingredients/ginger.php"><img class="ingr" src="./images/ginger-b.png" title="Ginger page" /></a>
                   <a href="./ingredients/avocado.php"><img class="ingr" src="./images/avocado-b.png" title="Avocado page" /></a>
                  <a href="./ingredients/plantain.php"><img class="ingr" src="./images/plantain-b.png" title="Plantain page" /></a>
               </center>
               </div>
            </div>
         </div>
         <!-- Add Main Content here -->
         <!-- Add Image here -->				
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
