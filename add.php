<?php
include("db.php");

$name = $_POST['name'];
$course = $_POST['course'];

mysqli_query($conn, "INSERT INTO studentdata(name, course) VALUES('$name','$course')");

header("Location: dashboard.php");
?>