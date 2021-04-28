<?php include "includes/header.php"; ?>

<!--Image Uploading-->
<?php
    // Initialize message variable
  $msg = "";
  $id = "category_id";

?>

<?php 



$query = "SELECT * FROM category";

$selectCategory = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($selectCategory)) {
        $id = $row["category_id"];
        $name = $row["category_name"];
        $category_image = 'image1/'.$row["category_image"];
    }


?>

<?php 
    if(isset($_POST['updateCategory'])) {	
  	
  	// target the image file directory where the images will be stored when uploaded
  	$target = "image1/".basename($category_image);

    $name = $_POST['category_name'];
    $category_image = $_FILES['category_image']['name']; //Getting the image name
    $categoryImageTemp = $_FILES['category_image'] ['tmp_name'];
    

    move_uploaded_file($categoryImageTemp, "../images/$category_image");


    //Moving the Images from the Form to the targeted folder/directory
    if (move_uploaded_file($_FILES['category_image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

                            
        $query = "UPDATE user SET ";
        $query .= "category_name = '{$name}', ";
        $query .= "category_image = '{$category_image}', ";
        $query .= "WHERE category_id = '{$id}' ";
                            
        $update_query = mysqli_query($connection, $query);

        confirmQuery($update_query);

    }
?>

<div id="wrapper">

<?php include "includes/smenavigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12">

                <h1> <center>Users </center> </h1> 
                <hr>

                    <form action="" method="POST" enctype="multipart/form-data">

                        

                                <div class="form-group">
                                    <label for="category_name">Category Name:</label>
                                        <input value="<?php if (isset($name)) {echo $name;}  ?>" type="text" class="form-control" name="category_name" required>
                                </div>

                            <div class="form-group">
                                    <label for="user_image">Photo:</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="img-responsive" src="image1/<?php echo $category_imagemage; ?>" alt="" style="height: 175px; width: 175px; padding-top: 5px; padding-bottom: 5px;" />
                                    </div>
                                    <div class="col-sm-9" style="padding-top:65px;">
                                        <input value="<?php if (isset($category_image)) {echo $category_image;}  ?>" type="file" class="form-control" name="user_image">
                                    </div>
                                </div> <!--row-->
                            </div> <!--image form-group div-->

                            


                                <div class="form-group">
                                    <input class="btn btn-success" type="submit" name="updateCategory" value="Update Category">
                                </div>
                                                                    
                    </form>

                
                </div>
            </div>
        </div>
    </div>

                
</div>
<?php include "includes/footer.php"; ?>