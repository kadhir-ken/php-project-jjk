<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload Video</title>
</head>
<body>

<h2><a href="video.php">Upload Video</a></h2>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="videoFile">Select Video:</label><br>
  <input type="file" id="videoFile" name="videoFile"><br><br>
  <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>
<?php
// Establish database connection
$pdo = new PDO('mysql:host=sql203.infinityfree.com;dbname=if0_36009060_bussinessdb', 'if0_36009060', 'k4H7J1O1evijp2');

// Check if form is submitted
if (isset($_POST['submit'])) {
    // File upload path
    $targetDir = "uploads/";
    $fileName = basename($_FILES["videoFile"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('mp4', 'avi', 'mov', 'wmv');

    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $targetFilePath)) {
            // Insert file path into database
            $sql = "INSERT INTO videos (url) VALUES (:url)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':url', $targetFilePath);
            $stmt->execute();
            echo "The file " . $fileName . " has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, only MP4, AVI, MOV, and WMV files are allowed to upload.";
    }
}

// Close database connection
$pdo = null;
?>
