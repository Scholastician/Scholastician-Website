<?php
$link = mysqli_connect("localhost", "nihal", "12345", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
// Escape user inputs for security

echo $class;

echo "hello";
echo $_SESSION['username'];
$user = $_SESSION['username'];
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_type = $file ['type'];
    $file_size = $file ['size'];
    $file_path = $file ['tmp_name'];
    $file_newname = $user.'.APScores.'.$file_name;
    $target_dir = 'assets/transcripts/'.$file_newname;
    move_uploaded_file($file_path, $target_dir);
    header("Location: tutorHomePage.php?APScoresuploadedsuccessfully");
}
mysqli_close($link);
?>
