<?php
@include "../conn.php";


$name = $_POST['name'];
$credit = $_POST['credit'];
$code = $_POST['code'];
$sql = "INSERT INTO `course` (`name`, `credit`, `code`) VALUES ('$name', '$credit', '$code')";


if($conn->query($sql)){
    
    echo "data inserted";
}else{
    echo "error executing";
}

