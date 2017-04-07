<?php
session_start();
?>

<?php
	include 'header.php';
	include 'dbconnect.php';
?>



<link rel="stylesheet" href="style-login.css" type="text/css" />


<form action="login.php", method="POST">
<div class="formhere" align="center">
Username: <input type=text placeholder="Enter Username" name='user' required><br/>
Password: <input type=password placeholder="Enter Password" name='pass' required><br/>
<input type=submit value = 'Submit' name='submit'><br/><br/>
<p><a href="passwordreset.php">Forgot Password</a></p>

</div>

<?php
if(!empty ($_POST['user'])  && !empty($_POST['pass'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$pass_query =  "SELECT PASSWORD FROM USERS WHERE USER='$user'";
	$db_pass = $dbh->prepare($pass_query);
	$db_pass->execute();
	$db_pass = $db_pass->fetch();
	
	if ($db_pass['password'] === $pass){

		$_SESSION['user']=$user;

		echo " Login is successful!<br/>";
 		header("Location: index.php"); 
		date_default_timezone_set('America/Denver');
		echo date('l jS \of F Y h:i:s A');
 
	}else{
		echo	'<div align="center">';
 		echo " Login Failed!";
		echo	'</div>';
	}
}

?>
</form>







<?php 
	include 'footer.php'; 
		
?>
	
