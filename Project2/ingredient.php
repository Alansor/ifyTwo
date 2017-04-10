<?php
session_start();
?>



<?php
	include 'header.php';
	include 'dbconnect.php';
	
	function delete_comment($comment2, $dbh){
		$delete_query = "DELETE FROM COMMENTS WHERE COMMENT='$comment2'";
		$remove = $dbh->prepare($delete_query);
		$remove->execute();
		echo "<meta http-equiv='refresh' content='0'>";
	}

/*	function comment_query(){
          foreach( $comment_col as $comment){

          echo $comment["user"] . ": " . $comment["comment"] . "<br / <br />";
          }

         echo "<br /> <br />";


	}*/

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
			echo	'<form name="delete" method="post" action="#">
				<input type="submit" value="Delete" name="remove"> 
				</form>';

		}
	
					
         }

		if(isset($_POST['remove'])){
			$delete_text= $comment['comment'];
			delete_comment($delete_text, $dbh);
			$_POST['remove']=NULL;
		}

	echo "<br /> <br />";





	if (isset ($_SESSION['user'])){
echo <<<EOT
		<form action="" method='post'>
		Comment:<br />
  		<textarea name='comment' id='comment'></textarea><br />
  		<input type='submit' value='Comment' />

		</form>
EOT;
		if(isset($_POST['comment'])){
		
			$user= $_SESSION['user'];
			$post_comment=filter_var($_POST['comment'],FILTER_SANITIZE_STRING);
			$post_query = "INSERT INTO COMMENTS values('$name','$user','$post_comment')";
	       		$comment_post = $dbh->prepare($post_query);
 	        	$comment_post->execute();
			echo "<meta http-equiv='refresh' content='0'>";
		}

	}
?>


		</div>
</div>

<div class="col-lg-8">
         <div class="hidden-sm hidden-xs">
            <?php echo '<img src="images/' . $image . '" class="ingImg" title="Mmmmm, ' . $name . '" alt="Photo of ' . $name . '" />'; ?>
        </div>
</div>



</div>
<?php 
	include 'footer.php'; 
		
?>
	

