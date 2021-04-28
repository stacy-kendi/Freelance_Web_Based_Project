<?php 

if (isset($_POST['submitUser'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $useremail = $_POST['useremail'];
  $userpassword = $_POST['password'];
  $userRole = $_POST['userRole'];
  

  $query = "INSERT INTO user (username, firstname, lastname, email, password, user_role) VALUES('$username', '$firstname', '$lastname', '$useremail', '$userpassword', '$userRole')";
  mysqli_query($connection, $query);
  header("Location: adminusers.php");

  /*echo "New User Added Successfully:" . " " . "<a href='adminusers.php'>View All Users</a>";*/
}


?>




<form action="" method="POST">
                                            
            <div class="form-group">
                <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" required>
            </div>

            <div class="form-group">
                <label for="firstname">First Name:</label>
                    <input type="text" class="form-control" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name:</label>
                    <input type="text" class="form-control" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="userEmail">Email:</label>
                    <input type="email" class="form-control" name="useremail" required>
            </div>

            <div class="form-group">
                <label for="userPassword">Password:</label>
                    <input type="password" class="form-control" name="password" required>
            </div>

            <div class='row'>
            <div class='col-sm-6'>
                <label for='userRole'>User Role</label> </br>
                    <div class='form-group'>
                        <select class='form-control' name='userRole' required>
                        
                           <option value="freelancer">Select Option</option>
                           <option value="admin">Admin</option>
                           <option value="freelancer"> Freelancer</option>
                           <option value="sme">SME</option>

                        </select>
                                    
                    </div>
            </div>


        </div>


        
                          

        <div class="form-group">
            <input class="btn btn-success" type="submit" name="submitUser" value="Add User">
        </div>
                                                
</form>