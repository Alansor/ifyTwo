<div class="contents">
                <p>Reset Your Password:</p>
                <form action="" method="post">
                         Password: <input type="password" name="password">
                         <br>
                         Confirm Password: <input type="password" name="confirm">
                         <br><br>
                         <div><input type="submit" name="reset" value="Reset"/></div>
                </form>
                <?php
                        if (isset($_POST['reset'] )){
                                $password = strip_tags($_POST['password']);
                                $confirm = strip_tags($_POST['confirm']);

                                if($password!=$confirm){
                                        echo "Passwords do not match";
                                }else{
					$user=$_SESSION['resetName'];
                        		$pass_query =  "UPDATE USERS SET PASSWORD='$password' WHERE USER='$user'";
				        $db_pass = $dbh->prepare($pass_query);
        				$db_pass->execute();
   
			
                                }
                        }
                ?>

</div>


