<?php
$loginPage = FALSE;
$helpPage  = FALSE;
include 'dbconnect.php';
include 'database.php';

$ingName = $image = $price = $description = $error = '';

$max_file_size = 1000000;


if (isset($_POST["submitform"])) {
    
    $ingName     = $_POST['ingName'];
    $image       = $_FILES['image']['name'];
    $price       = $_POST['price'];
    $description = $_POST['description'];

    
    $dbh -> uploadIng($ingName, $price, $description, $image);
    
    $move = "./images/" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "$move");
    chmod($move, 0755);
    
    header("Location: index.php");
    
}

?>

<div id="addIng">
    <h1 align="center"><stong>Add Ingredients</strong></h1>
    <form name='input' action="#" method='post' enctype="multipart/form-data" id="formInput" align="center" > 

        <input id="formBox" type='text' value='<?php
echo $ingName;
?>' id='ingName' name='ingName' placeholder='Enter Ingredient Name'/>
        <br/>
 
        <input id="formBox" type="hidden" name="MAX_FILE_SIZE" value="<?php
echo $max_file_size;
?>" />
        <br/>
         
        <input id="formBox" type='text' value='<?php
echo $price;
?>' id='price' name='price' placeholder='Enter Price'/>
        <br/>

        <textarea value='<?php
echo $description;
?>' style="margin-top: 25px; margin-left: 50px;" rows="4" cols="50" id="formInput" name="description" placeholder='Enter description'></textarea>
        <br/>
        <br/>
<input type='file' value='<?php
echo $image;
?>' id='image' name='image' class="form-control" style="padding-bottom: 30px; width: 270px;vertical-align: middle;margin-left: 40px;display: inline-block;" />
        <br/>
        
        <?php
echo $error;
?>
<br/>
       <input type='submit' value='Submit Form' name='submitform' class="Submit Form" />

    </form>
    

</div>

<?php
include 'footer.php';

