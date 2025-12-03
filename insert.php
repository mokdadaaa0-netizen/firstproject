<?php 
@include "conn.php";


$name = $_POST['name11'];

$address = $_POST['address'];

$contact = $_POST['contact'];

$email = $_POST['email'];
$gender = $_POST['gender'];
$time = $_POST['time'];

$sql = "INSERT INTO `details`(`name`,`contact`,`address`,`email`,`gender`,`time`) VALUES ('$name','$address','$contact','$email','$gender', '$time')";


if($conn->query($sql)){
    
    header("location: display.php");
echo "data";
}else{
    echo "error executing";
}

