<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Numbers</title>
</head>
<body>
    <form action="la.php" method="POST">
        <label for="num1">num1</label>
        <input type="text" name="num1" id="num1">
        <label for="num2">num2</label>
        <input type="text" name="num2" id="num2">
        <label for="num3">operator</label>
        <input type="text" name="num3" id="num3"> 
        <input type="submit" name="calculate" value="calculate">
    </form>

  
</body>
</html>


  <?php
  
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        
          if($num3=='+'){
            $sum=$num1+$num2;
            echo "$sum";
          }elseif($num3=='-'){
            $difference=$num1-$num2;
          }elseif( $num3== '*'){
            $multiple=$num1*$num2;}
           elseif( $num3== '/'){
        $divide=$num1/$num2;
    }

    ?>