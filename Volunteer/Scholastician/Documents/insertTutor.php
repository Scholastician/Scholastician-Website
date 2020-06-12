<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "nihal", "12345", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$grade = mysqli_real_escape_string($link, $_REQUEST['grade']);
$SAT = mysqli_real_escape_string($link, $_REQUEST['SAT']);
$ACT = mysqli_real_escape_string($link, $_REQUEST['ACT']);
$user = mysqli_real_escape_string($link, $_REQUEST['username']);
$pass = mysqli_real_escape_string($link, $_REQUEST['password']);
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $file_type = $file ['type'];
    $file_size = $file ['size'];
    $file_path = $file ['tmp_name'];
    $file_newname = $name.$file_name;
    $target_dir = 'assets/transcripts/'.$file_newname;
    move_uploaded_file($file_path, $target_dir);
}

//check if username already exists
$sql = "SELECT  username  FROM userinfo WHERE username = ?";

 if($stmt = mysqli_prepare($link, $sql))
 {
   //echo "print 1";
   // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_username);

              // Set parameters
              $param_username = $user;
          //    echo   $param_username;


  // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt))

          {
          //  echo "print 2";

              // Store result

              mysqli_stmt_store_result($stmt);

              // Check if username exists, if yes then verify password
                 if(mysqli_stmt_num_rows($stmt) >= 1)

                 {

                      echo "<script>alert('Username Already Taken. Please try another Username and submit again'); document.location='tutorRegistration.php'</script>";
                   }
          }
  }



// Attempt insert query execution
$sql = "INSERT INTO userinfo (Name, Email, PN, SAT, Grade, ACT, Username, Password, student) VALUES ('$name', '$email','$phone', '$SAT', '$grade', '$ACT', '$user', '$pass','0')";

if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>alert('Succesfully Registered.');</script>";
    session_start();
    $user = mysqli_real_escape_string($link, $_REQUEST['username']);
    $getInfo = "SELECT student FROM userinfo WHERE Username = '$user'";
    $query = mysqli_query($link, $getInfo);
    if(mysqli_num_rows($query) == 0)
    {
      echo "yes";
    }
    echo "no";
    echo "hello";
    $row = mysqli_fetch_array($query);
    $student = $row['student'];
    echo $user;
    $_SESSION['student'] = $student;
    echo $_SESSION['student'];
    $user = mysqli_real_escape_string($link, $_REQUEST['username']);
    $getInfo = "SELECT id FROM userinfo WHERE Username = '$user'";
    $query = mysqli_query($link, $getInfo);
    if(mysqli_num_rows($query) == 0)
    {
      echo "yes";
    }
    echo "no";
    echo "hello";
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    echo $user;
    $_SESSION['id'] = $id;
    $_SESSION['username'] = $user;
    echo $_SESSION['username'];
    header("Location: tutorHomePage.php?success");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
