<?php include "includes/smeHeader.php"; ?>

<!--Image Uploading-->
<?php
    // Initialize message variable
  $msg = "";

?>

<?php 

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

$query = "SELECT *FROM user WHERE username='{$username}'";

$selectuserprofile = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($selectuserprofile)) {
        $userid = $row["user_id"];
        $username = $row["username"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $useremail = $row["email"];
        $userpassword = $row["password"];
        $userRole = $row["user_role"];
        $userImage = '../images/'.$row["user_image"];
        $skills = $row["skills"];
        $userDescription = $row["user_description"];
        $ratePerHour = $row["user_rate_per_hour"];
    }
}

?>

<?php 
    if(isset($_POST['updateProfile'])) {	
  	
  	// target the image file directory where the images will be stored when uploaded
  	$target = "../images/".basename($userImage);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['password'];
    $userRole = $_POST['userRole'];
    $userImage = $_FILES['user_image']['name']; //Getting the image name
    $userImageTemp = $_FILES['user_image'] ['tmp_name'];
    $skills = $_POST['skills'];
    $userDescription = $_POST['user_description'];
    $ratePerHour = $row['user_rate_per_hour'];

    move_uploaded_file($userImageTemp, "../images/$userImage");

    //Retaining the Stored Image When Image is not Updated
    if(empty($userImage)) {
        $query = "SELECT *FROM user WHERE username='{$username}'";
        $selectImage = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($selectImage)) {
            $userImage = $row["user_image"];
        }
    }

    //Moving the Images from the Form to the targeted folder/directory
    if (move_uploaded_file($_FILES['user_image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

                            
        $query = "UPDATE user SET ";
        $query .= "username = '{$username}', ";
        $query .= "firstname = '{$firstname}', ";
        $query .= "lastname = '{$lastname}', ";
        $query .= "email = '{$useremail}', ";
        $query .= "password = '{$userpassword}', ";
        $query .= "user_role = '{$userRole}', ";
        $query .= "user_image = '{$userImage}', ";
        $query .= "user_description = '{$userDescription}' ";
        $query .= "WHERE username = '{$username}' ";
                            
        $update_query = mysqli_query($connection, $query);

        confirmQuery($update_query);

        header("Location: viewsmeprofile.php");
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
                                    <label for="username">Username:</label>
                                        <input value="<?php if (isset($username)) {echo $username;}  ?>" type="text" class="form-control" name="username" required>
                                </div>

                                <div class="form-group">
                                    <label for="firstname">First Name:</label>
                                        <input value="<?php if (isset($firstname)) {echo $firstname;}  ?>" type="text" class="form-control" name="firstname" required>
                                </div>

                                <div class="form-group">
                                    <label for="lastname">Last Name:</label>
                                        <input value="<?php if (isset($lastname)) {echo $lastname;}  ?>" type="text" class="form-control" name="lastname" required>
                                </div>

                                <div class="form-group">
                                    <label for="userEmail">Email:</label>
                                        <input value="<?php if (isset($useremail)) {echo $useremail;}  ?>" type="email" class="form-control" name="useremail" required>
                                </div>

                                <div class="form-group">
                                    <label for="userPassword">Password:</label>
                                        <input value="<?php if (isset($userpassword)) {echo $userpassword;}  ?>" type="password" class="form-control" name="password" required>
                                </div>

                                <div class='row'>
                                    <div class='col-sm-12'>
                                            <label for='userRole'>User Role</label> </br>
                                        <div class='form-group'>
                                            <select class='form-control' name='userRole' required>

                                                <option><?php echo $userRole; ?> </option> <!--default option-->
                                            
                                            </select>
                                                        
                                        </div>
                                </div>


                            </div>
               

                            <div class="form-group">
                                    <label for="user_description">Description:</label>
                                        <input value="<?php if (isset($userDescription)) {echo $userDescription;}  ?>" type="text" class="form-control" name="user_description" required>
                                </div>

                            <div class="form-group">
                                    <label for="user_image">Photo:</label>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="img-responsive" src="../images/<?php echo $userImage; ?>" alt="" style="height: 175px; width: 175px; padding-top: 5px; padding-bottom: 5px;" />
                                    </div>
                                    <div class="col-sm-9" style="padding-top:65px;">
                                        <input value="<?php if (isset($userImage)) {echo $userImage;}  ?>" type="file" class="form-control" name="user_image">
                                    </div>
                                </div> <!--row-->
                            </div> <!--image form-group div-->

                            


                                <div class="form-group">
                                    <input class="btn btn-success" type="submit" name="updateProfile" value="Update Profile">
                                </div>
                                                                    
                    </form>

                
                </div>
            </div>
        </div>
    </div>

                
</div>
<?php include "includes/adminfooter.php"; ?>