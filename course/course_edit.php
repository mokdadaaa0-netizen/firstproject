<?php
include '../conn.php';
$id = $_GET['id'];
$sql="SELECT * from course where id=$id ";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $code=$_POST['code'];
    $credit=$_POST['credit'];

    $sql1="UPDATE course SET code='$code',credit='$credit' where id='$id'" ;
    $result=$conn->query($sql1);
if($result){
    header("location:course_display.php");
    echo "Data Upadated successfully";
}
else{
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
        <label>name</label>
        <input type="text" name="name" id="" value="<?php echo $row['id']; ?>"> 

        <label>code</label>
        <input type="number" name="code" value="<?php echo $row['code']; ?>">

        <label>credit</label>
        <input type="text" name="credit" value="<?php echo $row['credit']; ?>">       

        <input type="submit" name="submit">
    </form>
</body>
</html>