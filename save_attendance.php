<?php
include "db.php";

$name = $_POST['staff_name'];
$designation = $_POST['designation'];
$shift = $_POST['shift'];
$status = $_POST['status'];
$date = date("Y-m-d");

$query = "INSERT INTO staff_attendance 
(staff_name, designation, shift, status, attendance_date)
VALUES ('$name', '$designation', '$shift', '$status', '$date')";

mysqli_query($conn, $query);

header("Location: index.php");
?>
