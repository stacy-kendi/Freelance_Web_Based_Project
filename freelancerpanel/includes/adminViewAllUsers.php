<table class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $sql = 'SELECT * FROM user'; 
                                $adminuserresult = mysqli_query($connection, $sql);
                            ?>

                            <?php 
                                if (mysqli_num_rows($adminuserresult) > 0) {
                                    while($row = mysqli_fetch_assoc($adminuserresult)) {
                                        $userid = $row["user_id"];
                                        $userName = $row["username"];
                                        $userFirstName = $row["firstname"];
                                        $userLastName = $row["lastname"];
                                        $userEmail = $row["email"];
                                        $userImage = $row["user_image"];
                                        $userRole = $row["user_role"];
                                        

                                            echo "<tr>";
                                            echo "<td>{$userid}</td>";
                                            echo "<td>{$userName}</td>";
                                            echo "<td>{$userFirstName}</td>";
                                            echo "<td>{$userLastName}</td>";
                                            echo "<td>{$userEmail}</td>";
                                            echo "<td>{$userRole}</td>";
                                            echo "<td><a href='adminusers.php?source=adminEditUser&p_id={$userid}'>  <i class='glyphicon glyphicon-edit'> </i>  </a> </td>";
                                            echo "<td><a href='adminusers.php?delete={$userid}'> <i class='glyphicon glyphicon-trash'> </i>  </a> </td>";
                                                
                                            echo "</tr>";
                        
                                        }
                                } else {
                                        echo "0 results";
                                }
                ?>

                                                    

                            
                        </tbody>
                    </table>

