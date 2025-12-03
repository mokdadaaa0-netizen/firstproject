<?php
include '../conn.php';
$id=$_GET['id'];
$sql="DELETE from course WHERE id='$id'";
$result=$conn->query($sql);
if($result){
  header('location:course_display.php');
  echo "Data deleted Successfully";
}
else{
    echo "Delete operation unsuccessfull";
}