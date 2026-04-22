<?php
include("db.php");

$id = $_GET['id'];

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $course = $_POST['course'];

    mysqli_query($conn, "UPDATE studentdata 
                         SET name='$name', course='$course' 
                         WHERE id=$id");

    header("Location: dashboard.php");
}

$result = mysqli_query($conn, "SELECT * FROM studentdata WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="POST">
<input type="text" name="name" value="<?php echo $row['name']; ?>">
<input type="text" name="course" value="<?php echo $row['course']; ?>">
<button name="update">Update</button>
</form>