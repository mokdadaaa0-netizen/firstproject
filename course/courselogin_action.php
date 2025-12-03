<?php 
session_start();

@include "../conn.php";


$name = $_POST['name'];


$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE `name`='$name' AND `password` = '$password'";

$result = $conn->query($sql);
if($result->num_rows > 0){
    
    $_SESSION['username'] = $name;
    header("location: course_display.php");
}else{
    echo "invalid username password";
}

