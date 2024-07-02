<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] == 0) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        $file_name = $_FILES['file_upload']['name'];
        $file_size = $_FILES['file_upload']['size'];
        $file_temp = $_FILES['file_upload']['tmp_name'];
        $file_type = $_FILES['file_upload']['type'];

        // Directory where the file will be uploaded
        $upload_dir = 'uploads/';

        // Ensure the directory exists (should be pre-created)
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $upload_path = $upload_dir . $file_name;

        // Move the uploaded file
        if (move_uploaded_file($file_temp, $upload_path)) {
            echo "File uploaded successfully: " . htmlspecialchars($file_name) . "<br>";
        } else {
            echo "Failed to upload file.<br>";
        }
    } else {
        echo "No file uploaded or an error occurred.<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form with File Upload</title>
</head>
<body>
    <h1>Simple Form with File Upload</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file_upload">Upload File:</label>
        <input type="file" id="file_upload" name="file_upload" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
