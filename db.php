<?php
$conn = mysqli_connect("localhost", "root", "", "khushmeetkaur");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>