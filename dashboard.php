<?php
session_start();
include("db.php");

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
<script>
function searchData(){
    let input = document.getElementById("search").value;

    fetch("search.php?search=" + input)
    .then(res => res.text())
    .then(data => {
        document.getElementById("result").innerHTML = data;
    });
}
</script>
</head>

<body>

<h2>Welcome Khushmeet</h2>
<a href="logout.php">Logout</a>

<div class="container">
<h3>Add Student</h3>
<form action="add.php" method="POST">
<input type="text" name="name" placeholder="Name" required>
<input type="text" name="course" placeholder="Course" required>
<button>Add</button>
</form>
</div>

<br>

<input type="text" id="search" onkeyup="searchData()" placeholder="Search student...">

<div id="result">
<?php include("search.php"); ?>
</div>

</body>
</html>