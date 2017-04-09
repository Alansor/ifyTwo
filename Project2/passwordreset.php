<?php
session_start();
?>

<?php
        include 'header.php';
        include 'dbconnect.php';
?>



<link rel="stylesheet" href="style-login.css" type="text/css" />


 <?php
        if (isset($_GET['key']) && $_GET['key'] == $_SESSION['token']){
                include 'reset.php';
        }else{
                 include 'forgot.php';
        }

if (isset ($db_email['email'])) {

        $rnd = str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz");
        $msg = "Please reset your password with the following link: $host$uri/passwordreset.php?key=$rnd";
        $subj = "$host$uri Password Reset";
        $_SESSION['token']=$rnd;
        $_SESSION['resetName']=$user;
        mail($db_email['email'],$subj,$msg);
	echo    '<div align="center">';
        echo "Check your email for the password link.";
        echo    '</div>';

}else if (!empty ($_POST['user'])){
	 echo    '<div align="center">';
         echo " Invalid Username!";
         echo    '</div>';


}




?>


<?php
        include 'footer.php';

?>

