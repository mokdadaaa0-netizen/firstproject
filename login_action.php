<?php 
session_start();

@include "conn.php";


$name = $_POST['name'];


$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE `name`='$name' AND `password` = '$password'";

$result = $conn->query($sql);
if($result->num_rows > 0){
    
    $_SESSION['username'] = $name;
    header("location: display.php");
}else{
    echo "invalid username password";
}







// @include "conn.php" ;
// $name = $_POST[`Name`];
// $password = $_POST[`password`];
// $sql = "SELECT * From users WHERE `name` = '$name' AND `password` = '$password' ";
// $result = $conn->query($sql);
// if($result->num_rows > 0) {
//     echo "logged in"
// } else{
//     echo "invalid user password"
// }

