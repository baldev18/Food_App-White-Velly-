


<?php
 
 include('connect.php');

 $n1 = $_POST['name'];
 $s1 = $_POST['email'];
 $e1 = $_POST['pass'];


 if($n1=="" && $s1=="" && $e1=="" )
 {
    echo "Please Fill All The Fields";
 }
 else
 {
    $query = "insert into baldev_users(name,email,pass) values('$n1','$s1','$e1')";
    mysqli_query($con,$query);
   
 }


?>