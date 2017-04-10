<?php
session_start();
?>



<?php
        include 'header.php';
        include 'dbconnect.php';
	$name=$_GET["name"];
	$id=$_GET["id"];
	$query = "SELECT comment FROM COMMENTS WHERE ID='$id'";
        $info = $dbh->prepare($query);
        $info->execute();
        $comment = $info->fetch();


?>



<div class="content"


		<form action="ingredient.php?name=<?php echo $name; ?>" method='post'>
                <p id="box">Edit:</p>

                <textarea name='comment' id='comment'><?php echo $comment["comment"]; ?></textarea><br />
                <input type='submit' id='comment' value='Submit Edit' />

                </form>



</div>

<?php

 if(isset($_POST['comment'])){
                        $post_comment=filter_var($_POST['comment'],FILTER_SANITIZE_STRING);
 
                        $post_query = "UPDATE COMMENTS SET COMMENT='$post_comment' where id='$id'";
                        $comment_post = $dbh->prepare($post_query);
			$comment_post-> execure();			

               
		 }

?>





<?php
        include 'footer.php';

?>














