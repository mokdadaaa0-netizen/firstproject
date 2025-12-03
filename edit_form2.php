<?php
@include "conn.php";
$id= $_GET['iddd'];


$sql="select * from details where id='$id'";

$result = $conn->query(query:$sql);
$row = $result->fetch_assoc();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name11'];

$address = $_POST['address'];

$contact = $_POST['contact'];

$email = $_POST['email'];
$gender = $_POST['gender'];
$time = $_POST['time'];

$sql ="UPDATE details SET `name` = '$name' , `address` = '$address' , `contact` = '$contact' ,
 `email` = '$email' , `gender` = '$gender' , `time` = '$time'    WHERE id='$id'";


if($conn->query($sql)){
    
    header("location: display.php");
echo "data";
}else{
    echo "error executing";
}

    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">name</label>
    <input type="text" name="name11" id="" value="<?php echo $row['name'];?>">

    <label for="">address</label>
    <input type="text" name="address" id="" value="<?php echo $row['address'];?>">

    <label for="">contact</label>
    <input type="number" name="contact" id="" value="<?php echo $row['contact'];?>">

    <label for="">email</label>
    <input type="text" name="email" id="" value="<?php echo $row['email'];?>">

    <label for="">gender</label>
    <input type="text" name="gender" id="" value="<?php echo $row['gender'];?>">

    <label for="">time</label>
    <input type="text" name="time" id="" value="<?php echo $row['time'];?>">

    <input type="submit" value="submit">
    </form>
</body>
</html>
