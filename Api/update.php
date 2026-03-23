<?php

    include 'connect.php';

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];



    $sql = "update baldev_users set name='$name', email='$email', pass='$pass' where id = '$id'";
    if(mysqli_query($con, $sql))
    {
        echo "Record updated successfully";
    }
    else
    {
        echo "Error deleting record: " . mysqli_error($con);
    }
   
    mysqli_close($con);
?>