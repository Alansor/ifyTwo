<?php
session_start();
?>

<?php
	include 'header.php';

?>
<link rel="stylesheet" href="style-ing.css" type="text/css" />
<div class="content">
<h2 style="font-family: 'Playfair', serif;">Ingredient 3 : Horseradish </h2>
<img src="images/horseradish.jpg" alt="Image Can't be Displayed!"  style="border-radius: 8px;"  >
<p><a href="https://upload.wikimedia.org/wikipedia/commons/c/ca/Kren_Verkauf.jpg">"Horseradish picture"</a> by <a href="https://commons.wikimedia.org/wiki/User:Anna_reg">Anna reg</a> can be reused under the <a href="http://creativecommons.org/licenses/by-sa/3.0">CC BY_SA 3.0</a>  </p>


<?php 

 if(isset($_SESSION['user'])){
 if(!isset($_SESSION['ing3'])){

	$_SESSION['ing3']='';
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

if(($_SESSION['ing3']==NULL)){
	$_SESSION['ing3']=$var;
}else{
	$_SESSION['ing3'] = $_SESSION['ing3'] . $var . "<br/>";
}
}
echo $_SESSION['ing3'];
	} 
?>















  
  
 



<?php 
	include 'footer.php'; 
		
?>
	

