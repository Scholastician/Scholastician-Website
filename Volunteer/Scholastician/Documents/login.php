
<?php

$link = mysqli_connect("localhost", "nihal", "1234", "account");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
  echo "connected to database";
}


$user = mysqli_real_escape_string($link, $_REQUEST['username']);
$pass = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "SELECT  username  FROM studentinfo WHERE username = ?";

 if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "s", $param_username);

              // Set parameters
              $param_username = $user;
              echo   $param_username;


  // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt))
          {
              // Store result

              mysqli_stmt_store_result($stmt);

              // Check if username exists, if yes then verify password
                 if(mysqli_stmt_num_rows($stmt) >= 1)
                 {
                   echo "Username found";
                   $sql1 =   "SELECT Username, Password FROM studentinfo WHERE Username=? and Password=?";


                   if($stmt1 = mysqli_prepare($link, $sql1))
                   {


                     mysqli_stmt_bind_param($stmt1,"ss", $param_username, $param_password);
                     //   mysqli_stmt_bind_param($stmt1, "s",$param_password);

                       $param_username=$user;
                       $param_password=$pass;


                       if(mysqli_stmt_execute($stmt1))
                       {
                       mysqli_stmt_store_result($stmt1);
                       if(mysqli_stmt_num_rows($stmt1) >= 1)
                                {

                                  echo "password found";
                                    echo "<script type='text/javascript'>alert('Succesfully logged in');</script>";
                                }
                        else
                        {
                          echo "wrong username password combo";

                        }



                       }



                   }




                  }
}
}
?>
