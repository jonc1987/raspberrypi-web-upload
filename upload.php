<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadDir = '/home/pi/nas/';
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    // Check for upload errors
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Move the file to the upload directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "File could not be moved to the upload directory.\n";
        }
    } else {
        echo "File upload error: " . $_FILES['file']['error'] . "\n";
    }
} else {
    echo "No file uploaded.\n";
}
?>
