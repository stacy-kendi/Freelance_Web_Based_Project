<?php include "includes/adminheader.php"; ?>

<?php include "includes/adminnavigation.php"; ?>

                <div class="row row-offcanvas row-offcanvas-left">

                    <div class="col-xs-12 col-sm-9 content" style="margin-left:20%; background-color:white;">

                        <h1> <center>Categories </center> </h1> 
                        <hr>

                            <div class="col-xs-6">
                            <!--Post Categories-->
                                <?php
                                    insertCategories(); 
                                ?>

                                    <form action="" method="POST">
                                        
                                        <div class="form-group">
                                            <label for="categoryTitle">Category Name:</label>
                                            <input type="text" class="form-control" name="categoryTitle">
                                        </div>

                                        <div class="form-group">
                                            <input class="btn btn-success" type="submit" name="submitCategory" value="Add Category">
                                        </div>
                                    
                                    </form>

                            <!--Edit Categories-->
                                        <?php 
                                        if(isset($_GET['edit'])) {
                                            $id = $_GET['edit'];

                                            include "includes/adminupdatecategories.php";
                                        }
                                        ?>

                                
                            </div>

                        <!--Table Form-->
                            <div class="col-xs-6">

                                    <table class="table table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Title</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                            <tbody>
                                                    <?php 
                                                        $sql = 'SELECT * FROM category'; 
                                                        $admincategoryresult = mysqli_query($connection, $sql);
                                                    ?>

                                                    <?php 
                                                        if (mysqli_num_rows($admincategoryresult) > 0) {
                                                            while($row = mysqli_fetch_assoc($admincategoryresult)) {
                                                                $id = $row["category_id"];
                                                                $name = $row["category_name"];
                                                                echo "<tr>";
                                                                echo "<td>{$id}</td>";
                                                                echo "<td>{$name}</td>";
                                                                echo "<td><a href='admincategories.php?delete={$id}'> <i class='glyphicon glyphicon-trash'> </i>  </a> </td>";
                                                                echo "<td><a href='admincategories.php?edit={$id}'> Edit <i class='glyphicon glyphicon-edit'> </i>  </a> </td>";
                                                                echo "</tr>";
                                                            
                                                            }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                    ?>

                                                    
                                    <!--Delete Categories-->
                                                    <?php 
                                                        deleteCategories();
                                                    ?>
                                                            
                                            </tbody>
                                    </table>

                            </div>
                        
                                            

                    </div>
                
                </div>

<?php include "includes/adminfooter.php"; ?>