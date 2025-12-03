<?php




foreach ($students as $student) {
  // foreach($student as $row) {
    echo $student ;
  }


$stu=['Name'=>'Rohan','Age'=>'25','Place'=>'Ktm'];



echo $stu['Name'];



// foreach ($students as $abc) {
//   echo "id=" . $abc[0] . "<br>";
//   // echo "<br>";
//   echo "name=" . $abc[1];
//   echo "<br>";
//   echo "subject=" . $abc[2];
//   echo "<br>";
//   echo "score=" . $abc[3];
//   echo "<br>";
// }




// echo $students[0][0];
// echo $students[0][1];
// echo $students[0][2];
// echo $students[0][3];
// echo $students[1][0];
// echo $students[1][1];
// echo $students[1][2];
// echo $students[2][0];
// echo $students[2][1];
// echo $students[2][2];
// echo $students[2][3];


// $i=0;
// while($i<=10){
  
//   echo $i;
//   //$i++;    //$i = $i +1;
//   $i = $i + 3;
//   echo "<br>";
  
// }

$students = [
    [1, 810, "Sita", "Math", 90],
    [2, 811, "Ram", "Science", 85],
    [3, 812, "Hari", "English", 78],
    [4, 813, "ram","social",88],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HTML Table Example</title>
</head>
<body>
  <h2>Student Marks Table</h2>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>S.N</th>
        <th>Roll No</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Marks</th>
    </tr>

    <?php
    foreach ($students as $abc) {
        echo "<tr>";
        echo "<td>" . $abc[0] . "</td>";
        echo "<td>" . $abc[1] . "</td>";
        echo "<td>" . $abc[2] . "</td>";
        echo "<td>" . $abc[3] . "</td>";
        
        echo "</tr>";
    }
    ?>
</table>


  </table>
</body>
</html>
