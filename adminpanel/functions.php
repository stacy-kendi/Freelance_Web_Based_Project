<?php 

    function insertCategories() {
            global $connection;

            if (isset($_POST['submitCategory'])){
                $categoryName = $_POST['categoryTitle'];

                    if($categoryName == "" || empty($categoryName)) {
                        echo "Kindly Add A Category";
                    } else {
                        $query = "INSERT INTO category (category_name) VALUE('$categoryName')";
                        mysqli_query($connection, $query);
                    
                    
                    }

            }

    }

    function deleteCategories() {
            global $connection;
            
            if(isset($_GET['delete'])) {
                $deleteCategoryId = $_GET['delete'];
                $query = "DELETE FROM category WHERE category_id = {$deleteCategoryId}";
                $delete_query = mysqli_query($connection, $query);
                header("Location: admincategories.php");
                
            }
    }

    function deleteProject() {
        global $connection;
        
        if(isset($_GET['delete'])) {
            $deleteProjectId = $_GET['delete'];
            $query = "DELETE FROM projects WHERE project_id = {$deleteProjectId}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: adminallprojects.php");
            
        }
}

    function deleteUser() {
    global $connection;
    
    if(isset($_GET['delete'])) {
        $deleteUserId = $_GET['delete'];
        $query = "DELETE FROM user WHERE user_id = {$deleteUserId}";
        $delete_query = mysqli_query($connection, $query);
        header("Location: adminusers.php");
        
    }
}

function confirmQuery($result) {
    global $connection;

    if (!$result) {
        die("Query Failed ." . mysqli_error($connection));
    }
}

?>