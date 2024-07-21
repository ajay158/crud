<?php
$stu_id = $_GET['id'];

include 'config.php';
$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($connect, $sql) or die("Query Unsuccessful.");


header("location: http://localhost/crud/index.php");

mysqli_close($connect);
