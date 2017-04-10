<?php
session_start();
?>

<?php
	include 'header.php';

?>
<link rel="stylesheet" href="style-ing.css" type="text/css" />
<div class="content">
<h2 style="font-family: 'Playfair', serif;">Ingredient 1 : Chives </h2>
<img src="images/chive.jpg" alt="Image Can't be Displayed! style:" style="border-radius: 8px;"  >
<p><a href="https://pixabay.com/p-1031315/?no_redirect">"Chive picture"</a> by <a href="https://pixabay.com/en/users/Unsplash-242387/">Unsplash</a> can be reused under the <a href="https://creativecommons.org/licenses/by/2.0/">CC BY license</a>  </p>



<?php 

 if(isset($_SESSION['user'])){
 if(!isset($_SESSION['ing1'])){

	$_SESSION['ing1']='';
}


echo <<<EOT
 
<form method='post'>

Comment:<br />
  <textarea name='comment' id='comment'></textarea><br />
  <input type='submit' value='Comment' />  

</form>



EOT;
if(isset($_POST['comment'])){

$var= filter_var($_POST['comment'],FILTER_SANITIZE_STRING) . "<br/>";

if(($_SESSION['ing1']==NULL)){
	$_SESSION['ing1']=$var;
}else{
	$_SESSION['ing1'] = $_SESSION['ing1'] . $var . "<br/>";
}
}
echo $_SESSION['ing1'];
	} 
?>









  
  
 



<?php 
	include 'footer.php'; 
		
?>
	

