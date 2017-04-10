<?php
        try {
                $dbh = new PDO("sqlite:./project2.sqlite");
                echo '<pre class="bg-success">';
                echo 'Connection successful.';
                echo '</pre>';
        } catch (PDOException $e) {
                /* If you get here it is mostly a permissions issue
                    * or that your path to the database is wrong
                    */
                echo '<pre class="bg-danger">';
                echo 'Connection failed (HELP): ' . $e->getMessage();
                echo '</pre>';
                die;
        }
?>

