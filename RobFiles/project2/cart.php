<?php
session_start();
include 'header.php';
include 'dbconnect.php';


if (!isset($_SESSION['contents'])){

	$_SESSION['contents']=array();

}


$contents = $_SESSION['contents'];




if (isset($_GET['add'])){
	array_push($contents,$_GET['add']);

}


foreach($contents as $ingredients){

	echo $ingredients .  '<br/>';
}


print_r($contents);


?>





<?php

include 'footer.php';

?>
