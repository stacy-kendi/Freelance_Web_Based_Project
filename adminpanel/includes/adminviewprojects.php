<?php error_reporting(0); ?>
<table class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Skills</th>
                                <th>Salary</th>
                                <th>TimeFrame</th>
                                <th>Description</th>
                                <th>Attachment</th>
                                <th>Similar Project</th>
                                <th>Posting Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $sql = 'SELECT * FROM projects'; 
                                $adminprojectresult = mysqli_query($connection, $sql);
                            ?>

                            <?php 
                                if (mysqli_num_rows($adminprojectresult) > 0) {
                                    while($row = mysqli_fetch_assoc($adminprojectresult)) {
                                        $projectid = $row["project_id"];
                                        $projectName = $row["project_title"];
                                        $projectCategory = $row["project_category"];
                                        $projectSkills = $row["project_skills"];
                                        $projectSalary = $row["project_salary"];
                                        $projectTimeframe = $row["project_timeframe"];
                                        $projectDescription = $row["project_description"];
                                        $projectAttachment = $row["project_attachment"];
                                        $similarProject = $row["similar_project"];
                                        $projectDate = $row["project_postingdate"];

                                            echo "<tr>";
                                            echo "<td>{$projectid}</td>";
                                            echo "<td>{$projectName}</td>";
                                
                                    $sql = "SELECT * FROM category WHERE category_id = $projectCategory"; 
                                    $admincategoryresult = mysqli_query($connection, $sql);
                                                                

                                                                
                                    if (mysqli_num_rows($admincategoryresult) > 0) {
                                        while($row = mysqli_fetch_assoc($admincategoryresult)) {
                                            $id = $row["category_id"];
                                            $name = $row["category_name"];
                                            echo "<td>{$name}</td>";//echo category title
                                        }
                                    }

                                    $sql = "SELECT * FROM skills WHERE skills_id = $projectSkills"; 
                                    $skillsresult = mysqli_query($connection, $sql);
                                    

                                    
                                        if (mysqli_num_rows($skillsresult) > 0) {
                                            while($row = mysqli_fetch_assoc($skillsresult)) {
                                                $id = $row["skills_id"];
                                                $name = $row["skill_name"];
                                                echo "<td>{$name}</td>";//echo skills title
                                            }
                                        }


                            
                                                echo "<td>{$projectSalary}</td>";
                                                echo "<td>{$projectTimeframe}</td>";
                                                echo "<td>{$projectDescription}</td>";
                                                echo "<td>{$projectAttachment}</td>";
                                                echo "<td>{$similarProject}</td>";
                                                echo "<td>{$projectDate}</td>";
                                                echo "<td><a href='adminallprojects.php?source=admineditproject&p_id={$projectid}'>  <i class='glyphicon glyphicon-edit'> </i>  </a> </td>";
                                                echo "<td><a href='adminallprojects.php?delete={$projectid}'> <i class='glyphicon glyphicon-trash'> </i>  </a> </td>";
                                                
                                                echo "</tr>";
                        
                                        }
                                } else {
                                        echo "0 results";
                                }
                ?>

                                                    

                            
                        </tbody>
                    </table>

