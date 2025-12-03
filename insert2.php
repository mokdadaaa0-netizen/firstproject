<?php 
@include "conn.php";


$name = $_POST['name'];

$email = $_POST['email'];

$password = $_POST['password'];

$sql = "INSERT INTO `users` (`name`,`email`, `password`  ) VALUES ('$name','$email','$password')";


if($conn->query($sql)){
    
    header("location: display.php");
echo "data";
}else{
    echo "error executing";
}