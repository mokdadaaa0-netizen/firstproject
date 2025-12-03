<?php 

@include "connectt.php";

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO `sushan`(`name`,`email`,`address`) values ('$name', '$email', '$address')";

if($conn->query(query:$sql)) {

    echo "data";
}else{
    echo "error data";
}




?>