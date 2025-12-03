<?php
    if(isset($_SESSION['username'])){
     echo "welcome ".$_SESSION['username']; 
    echo "<a href='logout.php'>logout</a><br>";
    }
    else{
        header('location: login_form.php');
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
    <form action="insert.php" method="post">
    <label for="">name</label>
    <input type="text" name="name11" id="">

    <label for="">address</label>
    <input type="text" name="address" id="">

    <label for="">contact</label>
    <input type="number" name="contact" id="">

    <label for="">email</label>
    <input type="text" name="email" id="">

    <label for="">gender</label>
    <input type="text" name="gender" id="">

    <label for="">time</label>
    <input type="text" name="time" id="">

    <input type="submit" value="submit">
    </form>
</body>
</html>