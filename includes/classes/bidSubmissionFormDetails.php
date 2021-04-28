<?php 

class bidSubmissionFormDetails {

    private $connection;
    public function __construct($connection) {
        $this->connection =$connection;
    }

    public function createBidSubmissionForm() {
        

        $descriptionInput = $this->createBidDescription();
        $submitBid = $this->submitBid();
        $submitCheckbox = $this ->bidCheckbox();


       return "<form action='submitBid.php' method='POST'>
                $descriptionInput
                $submitCheckbox
                $submitBid                
                </form>";

    }

        

    private function createBidDescription() {
        return "
                    <label for='bidproposal'>Bid/Proposal</label> </br>
                    <textarea name='bidDescription' rows='25' cols='90' required style='border:1.5px solid;'></textarea> </br> </br>";
    }

    private function bidCheckbox() {
        return "
                    <label for='projectReminder'>Note: Kindly ensure your profile is upto date and you have included your relevant skillset based on the project requirement</label> </br> </br>

                    <input type='checkbox' name='bidCheckbox' required style='border:1.5px solid;'>

                    <label for='projectCheckbox'>By checking this, you accept the terms and conditions</label> </br> </br>"; 
                    
    }


    private function submitBid() {
        return "
                    <center> <button class='btn btn-success' type='submit' name='submitBid'>Submit Bid </button> </center>";
    }

    


}

?>
