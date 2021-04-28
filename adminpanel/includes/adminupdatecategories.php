                        <!--Edit Categoried Form-->

                        <form action="" method="POST"> 
                            
                            <div class="form-group">
                                <label for="categoryTitle">Category Name:</label>

                                    <?php
                                    
                                        if (isset($_GET['edit'])) {

                                            $id = $_GET['edit'];

                                            $sql = "SELECT * FROM category WHERE category_id = $id"; 
                                            $categoryresult = mysqli_query($connection, $sql);
                                        

                                        
                                            if (mysqli_num_rows($categoryresult) > 0) {
                                                while($row = mysqli_fetch_assoc($categoryresult)) {
                                                    $id = $row["category_id"];
                                                    $name = $row["category_name"];
                                                }
                                            }
                                                
                                    ?>

                                        <input value="<?php if (isset($name)) {echo $name;}  ?>" type="text" class="form-control" name="categoryTitle">
                                        
                                    <?php } ?>

                                    <?php 
                                        if(isset($_POST['updateCategory'])) {
                                            $categoryTitle = $_POST['categoryTitle'];
                                            $query = "UPDATE category SET category_name = '{$categoryTitle}' WHERE category_id = {$id}";
                                            $update_query = mysqli_query($connection, $query);

                                                if (!$update_query) {
                                                    die("QUERY FAILED". mysqli_query($connection));
                                                }
                                        }
                                    ?>

                                
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="updateCategory" value="Edit Category">
                            </div>
                        
                        </form>