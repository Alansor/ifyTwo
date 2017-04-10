<?php
//     require_once('ingredient.php');
    $name = $price = $description = $image = '';
    
    class Database extends PDO{
        public function __construct(){
                parent:: __construct("sqlite:" . __DIR__ . "project2.sqlite");
        }
        //functions
        function addIngredient($name, $price, $image){
            $sql = "INSERT INTO ingredients(name, description, image) VALUES(?,?,?)";
            $stmt = $this->prepare($sql);
            return $stmt->execute(array($name, $price, $image));
        }
        function addComment($ingredient, $user, $comment, $id){
            $sql = "INSERT INTO comments(ingredient, user, comment, id) VALUES(?, ?, ?, ?)";
            $stmt = $this->prepare($sql);
            return $stmt->execute(array($ingredient, $user, $comment, $id));
        }
        function uploadIng($name, $price, $description, $image){
            $this->addIngredient($name, $price, $image);
            $this->addComment($ingredient, NULL, $description, NULL);
        }
    }
    
?>
