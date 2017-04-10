<p> Enter your Username: </p>
<form action="#", method="POST">
<div class="formhere" align="center">
Username: <input type=text placeholder="Enter Username" name='user' required><br/>
<input type=submit value = 'Submit' name='submit'><br/><br/>

</div>

<?php
if(!empty ($_POST['user']) ){
        $user=$_POST['user'];

        $email_query =  "SELECT EMAIL FROM USERS WHERE USER='$user'";
	
        $db_email = $dbh->prepare($email_query);
        $db_email->execute();
        $db_email = $db_email->fetch();
      }

?>
</form>

