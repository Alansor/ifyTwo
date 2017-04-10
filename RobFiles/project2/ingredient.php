<?php
session_start();
?>



<?php
	include 'header.php';
	include 'dbconnect.php';
	


	if(isset($_POST["remove"])){
		$delete=$_POST["delete"];
		$delete_query = "DELETE FROM COMMENTS WHERE ID='$delete'";
                $remove = $dbh->prepare($delete_query);
                $remove->execute();
                echo "<meta http-equiv='refresh' content='0'>";

	}

	if(isset($_POST['Edit'])){
		$id = $_POST['commentid'];
		$post_comment=filter_var($_POST['new_comment'],FILTER_SANITIZE_STRING);
		$post_query = "UPDATE COMMENTS SET COMMENT='$post_comment' WHERE ID='$id')";
	       	$comment_post = $dbh->prepare($post_query);
 	        $comment_post->execute();

		echo "<meta http-equiv='refresh' content='0'>";
	}



	$name=$_GET["name"];
	$query = "SELECT * FROM INGREDIENTS WHERE NAME='$name'";
	$info = $dbh->prepare($query);
	$info->execute();
	$info = $info->fetch();

	$comment_query = "SELECT * FROM COMMENTS WHERE ingredient='$name'";
	$comment_col = $dbh->prepare($comment_query);
        $comment_col->execute();



	$description = $info['description'];
	$image = $info['image'];
	$delete_text='';	

?>


<script>
function edit(comment) {
	document.getElementById("box").innerHTML="Edit:";
	document.getElementById("commentbutton").value="Submit Edit";
	document.getElementById('comment').value=comment;
}
</script>

<link rel="stylesheet" href="style-ing.css" type="text/css" />
<div class="content" >
 <div class="col-md-4">
               <div class="bodyCenter">
                  <strong>
                    <h2> Description </h2>
                    	<p><?php echo $description; ?></p>
			<br /> <br /> <br /> <br />
<?php

         foreach( $comment_col as $comment){

	

         echo $comment["user"] . ": " . $comment["comment"] . "<br / <br />";

		if(isset($_SESSION['user']) && $_SESSION['admin']==2){
			echo	'<form method="post">
				<input type="hidden" name="delete" value="' . $comment["id"] . '"/>
				<input type="submit" value="Delete" name="remove""> 
				</form>';

		/*	 echo    '<form method="post" oncl="edit()">
        	                  <input type="hidden" name="old_commentid" value="' . $comment["id"] . '"/>
				<input type="hidden" name="old_comment" value=' . $comment["comment"] . '"/>
 	                          <input type="submit" value="Edit" name="change"">
                                  </form>';*/

				echo	'<form method="post" action="edit.php?name=' . $comment["ingredient"] . '&id=' . $comment["id"].'" >
				<input type="submit" value="Edit" name="change""> 
				</form>';


		}

		
	
					
         }


	echo "<br /> <br />";
	
	if(isset($_POST["change"])){

	
	echo	' <form action="" method="post">
                 Edit:<br />
                 <textarea name="edit" id="new_comment"> </textarea><br />
		 <input type="hidden" name="commentid" value=' . $_POST["old_commentid"] . '"/>
		<input type="submit" value="Edit" />
                 </form>';



	}else if (isset ($_SESSION['user'])){
echo <<<EOT
		<form method='post'>
		<p id="box">Comment:</p>
  		<textarea name='comment' id='comment'></textarea><br />
  		<input type='submit' id='commentbutton' value='Comment' />

		</form>
EOT;
		if(isset($_POST['comment'])){
		
			$user= $_SESSION['user'];
			$post_comment=filter_var($_POST['comment'],FILTER_SANITIZE_STRING);
			$post_query = "INSERT INTO COMMENTS values('$name','$user','$post_comment','')";
			$rowid_query = "UPDATE COMMENTS SET ID=ROWID";
	       		$comment_post = $dbh->prepare($post_query);
 	        	$comment_post->execute();
			$comment_post = $dbh->prepare($rowid_query);
                        $comment_post->execute();


			echo "<meta http-equiv='refresh' content='0'>";
		}

	}
?>


		</div>
</div>

<div>
         <div class="hidden-sm hidden-xs">
            <?php echo '<img src="images/' . $image . '" class="ingImg" title="Mmmmm, ' . $name . '" alt="Photo of ' . $name . '" />'; ?>
        </div>
</div>



</div>
<?php 
	include 'footer.php'; 
		
?>
	


