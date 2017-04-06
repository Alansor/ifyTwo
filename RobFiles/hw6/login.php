<?php
$loginPage = TRUE;
include 'control.php';
include 'support.php';

$users = readUsers(); 

if (isset ( $_POST ['login'] )) {
	$new = strip_tags($_POST ['username']);
	$epw = strip_tags($_POST ['password']);
	$old = $_SESSION ['userName'];
	if ($new != $old) {
		if (password_verify($epw, userHashByName($users, $new))) {
			$_SESSION ['startTime'] = time ();
			$_SESSION ['userName'] = $new;
			header ( "Location: https://$host$uri/index.php" );
		}
	}
}
include 'header.php';
?>

</head>
<!-- Start of page Body -->
<body>
 	<div class="header">
		<h2> CT 310 HW6: Login</h2>
	</div>
	<div class="contents">
		<p>Enter your Username and password please:</p>
		<form action="login.php" method="post">
			 Username: <input type="text" name="username">
                         <br>
                         Password: <input type="password" name="password">
                         <br><br>
                         <div><input type="submit" name="login" value="Login"/></div>
		</form>
	<p>New User <a href="signup.php">sign up</a></p>
	<p>Forgot Password <a href="passwordreset.php">reset password</a></p>	

	</div>
<?php include 'footer.php'; ?>
