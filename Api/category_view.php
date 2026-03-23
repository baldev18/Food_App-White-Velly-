<?php
    include 'connect.php';
    $sql = "SELECT * FROM category";
    $req = mysqli_query($con, $sql);
    $response = array();
    while($row=mysqli_fetch_array($req))
    {
        $value["id"] = $row["id"];

        $value["name"] = $row["name"];
        $value["prise"] = $row["prise"];
        $value["image"] = $row["image"];
        array_push($response, $value);
    }
    
    echo json_encode($response);
    mysqli_close($con);
?>