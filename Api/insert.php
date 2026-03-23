<?php

    include 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if($name=="" && $email=="" && $pass=="")
    {
        echo "All fields are required.";
    }
    else
    {
        $sql = "INSERT INTO baldev_users (name,email,pass) VALUES ('$name', '$email', '$pass')";
        mysqli_query($con, $sql);
        mysqli_close($con);

}




?>