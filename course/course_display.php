<?php
session_start();
@include "../conn.php";

$sql = "SELECT * FROM course";

$result = $conn->query($sql);
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
    echo "<a href='course_logout.php'>logout</a><br>";
    }
    else{
        header('location: course
        courselogin_form.php');
    }
    ?>


    <h2>Welcome! <?php echo $_SESSION['username'];?></h2>
    <a href="course_form.php">Insert Data</a>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>code</th>
            <th>credit</th>
        </tr>
        <?php 
        while($row = $result->fetch_assoc()){ ?>
        <tr>
        <td><?php echo $row['id']; ?> </td>

        <td><?php echo $row['name']; ?> </td>
        <td><?php echo $row['code']; ?> </td>
        <td><?php echo $row['credit']; ?> </td>
        <td><a href="course_edit.php?id=<?php echo $row['id']; ?>">edit</a><a href="course_delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
        </tr>

        <?php } ?>
        
    </table>
    <form action="logout.php" method="POST">
    <input type="submit" value="logout">
</body>
</html>