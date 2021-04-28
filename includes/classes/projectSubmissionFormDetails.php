<?php 

class projectSubmissionFormDetails {

    private $connection;
    public function __construct($connection) {
        $this->connection =$connection;
    }

    public function createProjectSubmissionForm() {
        
        $fileInput = $this->createAttachmentUpload();
        $titleInput = $this->createProjectTitle();
        $descriptionInput = $this->createProjectDescription();
        $budgetInput = $this->createProjectBudget();
        $categoryInput = $this->createProjectCategory();
        $submitProject = $this->submitProject();
        

       return "<form action='postProject.php' method='POST' enctype='multipart/form-data'>
              $titleInput
              $categoryInput
              $descriptionInput                
              $fileInput
              $budgetInput
              $submitProject 
                </form>";
    }



    private function createProjectTitle() {
        return "
            <div class='row'>
                <div class='col-sm-12'>
                    <label for='projectTitle'>Project Title</label> </br>
                    <input type='text' name='projectTitle' required style='border:1.5px solid;'> </br>
                </div>
            </div>";
    }

    private function createProjectCategory() {
        
            $sql = 'SELECT * FROM category'; 
            $result = mysqli_query($this->connection, $sql);

            $sql = 'SELECT * FROM skills'; 
            $skillsresult = mysqli_query($this->connection, $sql);

                    $html= "
                            <div class='row'>
                                <div class='col-sm-6'>
                                        <label for='projectCategory'>Project Category</label> </br>
                                    <div class='form-group'>
                                        <select class='form-control' name='categoryinput' required style='border:1.5px solid;>";
                                    

                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            //$id = $row["category_id"];
                                            $name = $row["category_name"];
                                            $html .= "<option value='$name'>$name</option>";
                                        
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    $html .= "</select> 
                                    </div>
                                </div>

                                <div class= 'col-sm-6'>
                                        <label for='requiredSkill'>Required Skill</label> </br>
                                    
                                    <div class='form-group'>
                                        <select class='form-control' name='requiredSkill' required style='border:1.5px solid;>";
                                    

                                    if (mysqli_num_rows($skillsresult) > 0) {
                                        while($row = mysqli_fetch_assoc($skillsresult)) {
                                            $id = $row["skills_id"];
                                            $name = $row["skill_name"];
                                            $html .= "<option value='$id'>$name</option>";
                                        
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    $html .= "</select> 
                                    </div>

                                </div>


                            </div> ";
                        return $html; 

                    
    }

      
    
    private function createProjectDescription() {
        return "
                    <label for='projectDescription'>Project Description</label> </br>
                    <textarea name='projectDescription' rows='15' cols='100' required style='border:1.5px solid;'></textarea> </br>";
    }

    private function createAttachmentUpload() {
        return "

                <div class='row'>
                    <div class= 'col-sm-6'>

                        <div class='input-group'>
                            <label for='attachmentupload'>Attachment Upload</label> 
                            <input type='file' name='attachmentUpload' class='form-control' placeholder='Upload Attachment'  style='border:1.5px solid;'> 
                        </div>

                    </div>
                    
                    <div class= 'col-sm-6'>
                            <label for='similarProject'>Link To Similar Project </label> </br>
                            <input type='text' name='similarProject'  style='border:1.5px solid;'>
                    </div>

            </div> </br>";
    }

    
    private function createProjectBudget() {
        return "
                    <div class='row'>
                        <div class= 'col-sm-6'>
                            <label for='projectDescription'>Budget</label> </br>
                            <input type='text' name='projectBudget' required style='border:1.5px solid;'>
                        </div>
                        
                        <div class= 'col-sm-6'>
                            <label for='projectTime'>Time Frame </label> </br>
                            <input type='text' name='projectTime' required style='border:1.5px solid;'>
                        </div>

                </div> </br>";            

                    
    }

            
    private function submitProject() {
        return "
                    <button class='btn btn-success' type='submit' name='submitProject'>Submit Project </button>";
    }

     


}

?>
