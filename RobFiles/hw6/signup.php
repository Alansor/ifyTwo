<?php
$loginPage = TRUE;
include 'control.php';
include 'support.php';

$users = readUsers();


include 'header.php';
?>

</head>
<!-- Start of page Body -->
<body>
	<div class="header">
		<h2> CT 310 HW6: Signup </h2>
	</div>
	<div class="contents">
                <p>Enter the following information:</p>
                <form action="#" method="post">
                        Username: <input type="text" name="username">
                        <br>
			Email:	<input type="text" name="email">
			<br>
			Password: <input type="password" name="password">
                        <br><br>
                        <div><input type="submit" name="signup" value="Signup"/></div>
                </form>

<?php

if (isset ( $_POST ['signup'] )) {
        $new = strip_tags($_POST ['username']);
	$email = strip_tags($_POST ['email']);        
	$epw = strip_tags($_POST ['password']);
	$invalid = FALSE;
        foreach ($users as $u) {
                if ($u->username == $new) {
                        echo "Username already exists";
			echo "<br />";
			$invalid = TRUE;

                }
                if ($u->email == $email) {
                        echo "Email already exists";
			echo "<br />";
			$invalid = TRUE;
                }
		if (filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
			echo "Invalid email";
			echo "<br />";
			$invalid = TRUE;
		}
		if ($invalid){
			break;
		}

        }
	if (!$invalid){
		$newuser = makeNewUser($new, $email, password_hash($epw, PASSWORD_DEFAULT));
		writeUser($newuser);
		header ( "Location: https://$host$uri/login.php" );
	}
}

?>


<?php include 'footer.php'; ?> 
