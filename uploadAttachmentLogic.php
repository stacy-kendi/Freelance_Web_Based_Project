<?php
if (isset($_POST['submitProject'])) { 
    //Uploaded File Name
    $filename = $_FILES['attachmentUpload']['name'];

    // File Destination
    $destination = 'attachmentUploads/' . $filename;

    // Retrieving File Extension Path
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['attachmentUpload']['tmp_name'];
    $size = $_FILES['attachmentUpload']['size'];

    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .pdf or .docx";
    } elseif ($_FILES['attachmentUpload']['size'] > 10000) { // The size of the file should not be more than 1MB
        echo "File is too large!";
    } else {
        // move the uploaded file from temporary location to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>