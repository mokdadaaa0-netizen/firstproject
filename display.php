<?php 
session_start();

@include "conn.php";

$sql = "SELECT * FROM details";

$result = $conn->query($sql);
// while($row = $result->fetch_assoc()){
//     echo "name:". $row['name']."<br>";
//     echo "contact:".$row['contact']."<br>";
//     echo "email:".$row['email']."<br>";
//     echo "gender:".$row['gender']."<br>";
//     echo "time:".$row['time']."<br><br>";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple table</title>
</head>
<body>
    
    <?php
    if(isset($_SESSION['username'])){
     echo "welcome ".$_SESSION['username']; 
    echo "<a href='logout.php'>logout</a><br>";
    }
    else{
        header('location: login_form.php');
    }
    ?>
    
    <a href="form.php">Insert Data</a>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>contact</th>
            <th>email</th>
            <th>gender</th>
            <th>time</th>
            <th>Action</th>
        </tr>
        <?php 
        while($row = $result->fetch_assoc()){ ?>
        <tr>
        <td><?php echo $row['id']; ?> </td>

        <td><?php echo $row['name']; ?> </td>
        <td><?php echo $row['contact']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><?php echo $row['gender']; ?> </td>
        <td><?php echo $row['time']; ?> </td>
        <td><a href="edit_form2.php?iddd=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
        </tr>

        <?php } ?>
        
    </table>
</body>
</html>