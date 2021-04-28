<?php include "includes/header.php"; ?>
<?php include "includes/freelancerNavigation.php"; ?>

                <div class="row row-offcanvas row-offcanvas-left">

                    <div class="col-xs-12 col-sm-9 content" style="margin-left:20%">

                        <h1> <center>Categories </center> </h1> 
                        <hr>


                        <!--Table Form-->
                            <div class="col-xs-6">

                                    <table class="table table-bordered table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                
                                                <th>Category Title</th>
                                                
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
                                                                echo "<td><a href='singlecategory.php?category=$id'>{$name}</a></td>";
                                                                echo "</tr>";
                                                            
                                                            }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                    ?>

                                                    
                                    
                                            </tbody>
                                    </table>

                            </div>
                        
                        
                                            

                    </div>
                
                </div>

<?php include "includes/footer.php"; ?>