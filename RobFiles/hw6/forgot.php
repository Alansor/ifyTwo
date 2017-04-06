<div class="contents">
	<p>Select Username:</p>
        <form action="" method="post">
        <select name="name">
        	<?php
 	       		echo "\n";
               		foreach ($users as $u) {
 				$flag = ($u->username == $_SESSION['userName']) ? 'selected' : '';
 				echo "\t\t\t\t<option value=\"$u->username\" $flag > $u->username </option>\n";
 			}
        	?>
	</select>
        <input type="submit" value="Send Email" />
        </form>
</div>

