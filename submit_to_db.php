<?php

$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include "partials/_dbconnect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existsSql = "SELECT * FROM `{$database}`.`{$table}` WHERE username='$username'";
    $result = mysqli_query($conn, $existsSql);
    $numExistsRows = mysqli_num_rows($result);

    if ($numExistsRows>0){
        $showError = "Username already exists";
    }
    else{
        if ($password == $cpassword)
        {
            // echo $username . ' and ' . $password;
            $sql = "INSERT INTO `{$database}`.`{$table}` (`username`, `password`) VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}


?>