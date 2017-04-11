<?php
	include 'header.php';
//     class Database extends PDO{
//         public function __construct(){
//                 parent:: __construct("sqlite:" . __DIR__ . "./project2.sqlite");
//         }

//     include 'dbconnect.php';
        //functions
        function addIngredient($name, $description, $image){
            $dbh = new PDO("sqlite:./project2.sqlite");
            $sql = "INSERT INTO ingredients(name, description, image) VALUES(?,?,?)";
            $stm = $dbh->prepare($sql);
            return $stm->execute(array($name, $description, $image));
        }
        function addComment($ingredient, $user, $comment, $id){
            $dbh = new PDO("sqlite:./project2.sqlite");
            $sql = "INSERT INTO comments(ingredient, user, comment, id) VALUES(?, ?, ?, ?)";
            $stm = $dbh->prepare($sql);
            return $stm->execute(array($ingredient, $user, $comment, $id));
        }
        function uploadIng($name, $description, $image){
            $dbh = new PDO("sqlite:./project2.sqlite");
            addIngredient($name, $description, $image);
            addComment($ingredient, NULL, $description);
        }
//     }
	include 'footer.php';    
?>
