<?php
	include 'header.php';
//     class Database extends PDO{
//         public function __construct(){
//                 parent:: __construct("sqlite:" . __DIR__ . "./project2.sqlite");
//         }

//     include 'dbconnect.php';
        //functions
        function addIngredient($name, $price, $image){
            $dbh = new PDO("sqlite:./project2.sqlite");
            $sql = "INSERT INTO ingredients(name, description, image) VALUES(?,?,?)";
            $stm = $dbh->prepare($sql);
            return $stm->execute(array($name, $price, $image));
        }
        function addComment($ingredient, $user, $comment, $id){
            $dbh = new PDO("sqlite:./project2.sqlite");
            $sql = "INSERT INTO comments(ingredient, user, comment, id) VALUES(?, ?, ?, ?)";
            $stm = $dbh->prepare($sql);
            return $stm->execute(array($ingredient, $user, $comment, $id));
        }
        function uploadIng($name, $price, $description, $image){
            $dbh = new PDO("sqlite:./project2.sqlite");
            addIngredient($name, $price, NULL, $image);
            addComment($ingredient, NULL, $description, NULL);
        }
//     }
	include 'footer.php';    
?>
