<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['id'])) {
   header("Location: teachers.php");
}

$id = $_GET['id'];
$student=mysqli_query($con, " delete from teachers where id='$id' ");
header("location:teachers.php");

?>

