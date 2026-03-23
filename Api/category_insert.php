<?php

    include 'connect.php';

    $name = $_POST['name'];
    $prise = $_POST['prise'];
    $image = $_POST['image'];
    
    if($name=="" && $prise=="" && $image=="")
    {
        echo "All fields are required.";
    }
    else
    {
        $sql = "INSERT INTO category(name,prise,image) VALUES ('$name', '$prise', '$image')";
        mysqli_query($con, $sql);
        mysqli_close($con);

}




?>