<?PHP
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

include 'config.php';
$sql = "Insert INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
$result = mysqli_query($connect, $sql) or die("Query Unsuccessful.");

header("location: http://localhost/crud/index.php");
mysqli_close($connect);
