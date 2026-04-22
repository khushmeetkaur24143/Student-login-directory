<?php
include("db.php");

$search = "";
if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$query = "SELECT * FROM studentdata 
          WHERE name LIKE '%$search%' 
          OR course LIKE '%$search%'";

$result = mysqli_query($conn, $query);

echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>{$row['id']}</td>
    <td>{$row['name']}</td>
    <td>{$row['course']}</td>
    <td>
        <a href='delete.php?id={$row['id']}'>Delete</a> |
        <a href='update.php?id={$row['id']}'>Update</a>
    </td>
    </tr>";
}

echo "</table>";
?>