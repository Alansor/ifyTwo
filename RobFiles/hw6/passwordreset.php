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
		<h2> CT 310 HW6: Forgot Password </h2>
	</div>
	<?php
	if (isset($_GET['key']) && $_GET['key'] == $_SESSION['token']){
		include 'reset.php';
	}else{
		 include 'forgot.php';
	}
	

if (isset ( $_POST ['name'] )) {
	$username = ($_POST ['name']);
	$rnd = str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz");
	$msg = "Please reset your password with the following link: $host$uri/passwordreset.php?key=$rnd";
	$subj = "$host$uri Password Reset";
	foreach ($users as $u){
		if ($u->username == $username){
		
			$_SESSION['token']=$rnd;
			$_SESSION['resetName']=$username;
		//	$token=makeToken($username,$rnd);
		//	writeToken($token);
			mail($u->email,$subj,$msg);
			echo "Check your email for the password link.";
			
		}
	}


	


}

	?>
<?php include 'footer.php'; ?>
