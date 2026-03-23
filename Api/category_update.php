<?php

    include 'connect.php';

    $id = $_POST["id"];
    $name = $_POST['name'];
    $prise = $_POST['prise'];
    $image = $_POST['image'];



    $sql = "update category set name='$name', prise='$prise', image='$image' where id = '$id'";
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