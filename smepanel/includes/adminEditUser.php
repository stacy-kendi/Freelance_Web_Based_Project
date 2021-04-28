
    


<form action="" method="POST">

    <?php 

    if (isset($_GET['p_id'])) {

            $edituserid = $_GET['p_id'];

            $sql = "SELECT * FROM user WHERE user_id = $edituserid"; 
            $projectresult = mysqli_query($connection, $sql);



            if (mysqli_num_rows($projectresult) > 0) {
                while($row = mysqli_fetch_assoc($projectresult)) {
                    $userid = $row["user_id"];
                    $username = $row["username"];
                    $firstname = $row["firstname"];
                    $lastname = $row["lastname"];
                    $useremail = $row["email"];
                    $userpassword = $row["password"];
                    $userRole = $row["user_role"];
                }
            }


    ?>

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
            <div class='col-sm-6'>
                <label for='userRole'>User Role</label> </br>
                    <div class='form-group'>
                        <select class='form-control' name='userRole' required>

                            <option value="freelancer"><?php echo $userRole; ?> </option> <!--default option-->
                        
                        <?php 

                            /*$sql = $sql = "SELECT * FROM user"; 
                            $selectuserrole = mysqli_query($connection, $sql);
                            if (mysqli_num_rows($selectuserrole) > 0) {
                                while($row = mysqli_fetch_assoc($selectuserrole)) {
                                    $id = $row["user_id"];
                                    $user_role = $row["user_role"];

                                    echo "<option value='{$id}'>{$user_role}</option>";                                      
                                
                                }
                            } else {
                                echo "0 results"; 
                            }*/
                            
                            if($userRole == 'freelancer') {
                                echo "<option value='sme'>sme </option>";
                            } else {
                                echo "<option value='freelancer'>freelancer </option>";
                            }

                        ?>    

                           
                           

                        </select>
                                    
                    </div>
            </div>


        </div>


       <!-- <div class='row'>
            <div class='col-sm-6'>
                <label for='userRole'>User Role</label> </br>
                    <div class='form-group'>
                        <select class='form-control' name='userRole' required> -->
                        
                            <?php /* 

                                $sql = $sql = "SELECT * FROM user"; 
                                $selectuserrole = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($selectuserrole) > 0) {
                                    while($row = mysqli_fetch_assoc($selectuserrole)) {
                                        $id = $row["user_id"];
                                        $user_role = $row["user_role"];

                                        echo "<option value='{$id}'>{$user_role}</option>";                                      
                                    
                                    }
                                } else {
                                    echo "0 results"; 
                                }*/
                            ?>    

                        <!-- </select>
                                    
                    </div>
            </div>


        </div> --> 


<?php } ?>

<?php 
    if(isset($_POST['editUser'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userpassword = $_POST['password'];
        $userRole = $_POST['userRole'];
    
        $query = "UPDATE user SET ";
        $query .= "username = '{$username}', ";
        $query .= "firstname = '{$firstname}', ";
        $query .= "lastname = '{$lastname}', ";
        $query .= "email = '{$useremail}', ";
        $query .= "password = '{$userpassword}', ";
        $query .= "user_role = '{$userRole}' ";
        $query .= "WHERE user_id = {$edituserid} ";
    
        $update_query = mysqli_query($connection, $query);

            confirmQuery($update_query);
            header("Location: adminusers.php");
    }
?>
                

            <div class="form-group">
                <input class="btn btn-success" type="submit" name="editUser" value="Edit User">
            </div>
                                                
</form>