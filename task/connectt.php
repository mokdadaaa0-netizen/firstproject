<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "susan";

//create connection

$new = new mysqli($servername,$username,$password,$database);

//check connection

if($new->connect_error){
    die("connection failed:" . $new->connect_error);

}
echo "Connected successfully!";


?>
