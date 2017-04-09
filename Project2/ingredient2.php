<?php
session_start();
?>

<?php
	include 'header.php';

?>
<link rel="stylesheet" href="style-ing.css" type="text/css" />
<div class="content">
<h2 style="font-family: 'Playfair', serif;">Ingredient 2 : Swiss Chard </h2>
<img src="images/swiss.jpg" alt="Image Can't be Displayed!"  style="border-radius: 8px;"  >
<p><a href="https://pixabay.com/en/swiss-chard-garden-fresh-dinner-663845/">"Swiss Chard picture"</a> by <a href="https://pixabay.com/en/users/pixel1-336525/">pixel1</a> can be reused under the <a href="https://creativecommons.org/licenses/by/2.0/">CC BY license</a>  </p>


<?php 

 if(isset($_SESSION['user'])){
 if(!isset($_SESSION['ing2'])){

	$_SESSION['ing2']='';
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

if(($_SESSION['ing2']==NULL)){
	$_SESSION['ing2']=$var;
}else{
	$_SESSION['ing2'] = $_SESSION['ing2'] . $var . "<br/>";
}
}
echo $_SESSION['ing2'];
	} 
?>














  
  
 



<?php 
	include 'footer.php'; 
		
?>
	

