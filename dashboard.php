<?php
@include "conn.php";

// Get counts from database
$courseCount  = $conn->query("SELECT COUNT(*) AS total FROM course")->fetch_assoc()['total'];
$studentCount = $conn->query("SELECT COUNT(*) AS total FROM details")->fetch_assoc()['total'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
<h1>Admin Dashboard</h1>
<hr>

<h2>Statistics</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Category</th>
        <th>Total</th>
    </tr>
    <tr>
        <td>Total Courses</td>
        <td><?php echo $courseCount; ?></td>
    </tr>
    <tr>
        <td>Total Students</td>
        <td><?php echo $studentCount; ?></td>
    </tr>
    
</table>

<br><br>

<h2>Menu</h2>
<ul>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="course_display.php">Courses</a></li>
    <li><a href="student_display.php">Students</a></li>
    <li><a href="teacher_display.php">Teachers</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

<br>

<h2>Quick Actions</h2>
<ul>
    <li><a href="/student_info/course/course_form.php">Add Course</a></li>
    <li><a href="/student_info/form.php">Add Student</a></li>
    <li><a href="add_teacher.php">Add Teacher</a></li>
</ul>
</body>
</html>
