<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../css/index.css">
      <title>Login</title>
   </head>
   <body class="document">

       <?php
   session_start();
   session_name('theSession');
   $_SESSION["time"] = time();
   $username = $password = '';
    
    if(isset($_POST['sub']))
    {
        if(isset($_POST['psw'] , $_POST['uname']))
        {
            $md5pass = md5($_POST['psw']);
            if($_POST['uname'] == 'jkerchal'&& $md5pass == '0832c1202da8d382318e329a7c133ea0') /*md5 of 'cats'*/
            {
                $uname = $_POST['uname'];
                $psw = $_POST['psw'];
                $_SESSION["username"] = $uname;
                $_SESSION["password"] = $psw;
                $_SESSION["isLoggedIn"] = true;
                header("location:../index.php");
                exit;
            }
            else if($_POST['uname'] =='bob' && $md5pass == '5f4dcc3b5aa765d61d8327deb882cf99')
            {
                $_SESSION["username"] = $uname;
                $_SESSION["password"] = $psw;
                $_SESSION["isLoggedIn"] = true;
                header("location:../index.php");
                exit;
            }
            else if($_POST['uname'] =='ct310' && $md5pass == '48f2f942692b08ec9de1ef9ada5230a3')
            {
                $_SESSION["username"] = $uname;
                $_SESSION["password"] = $psw;
                $_SESSION["isLoggedIn"] = true;
                header("location:../index.php");
                exit;
            }
            else
            {
//                 echo "Incorrect username or Password";
                header("location: ./login.php");
                session_destroy();
                exit;
            }
        }
    }
?>
      <div class="jumbotron">
         <h1>Login</h1>
         <p>Please log in to continue</p>
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
                  <li class="active"><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    
                 <?php
                    }
                    ?>
                    <?php
//                 print_r($_SESSION);
                    if( $_SESSION["isLoggedIn"] == true)
                    {
                ?>
                      ?>  
                  <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
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
                    <form method="POST" action="protected.php">

                    <div class="fields">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <br>
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <br>
                        <input type='submit' class='subButton' value='Submit' name='sub' />
                        
            <!--           <button type="button" class="cancelbtn">Cancel</button>-->
                        
            <!--             <input type="checkbox" checked="checked"> Remember me -->
                        
                    </div>

<!--        <div class="cancel">
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>-->
    </form>
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

