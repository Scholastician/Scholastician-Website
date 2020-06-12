<?php
$link = mysqli_connect("localhost", "nihal", "12345", "account");
// Check connection
if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
// Escape user inputs for security
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];

echo $class;

echo "hello";
echo $_SESSION['id'];
$id = $_SESSION['id'];
$file_name=clean_string($id);
$target_dir = "assets/transcripts/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

?>

