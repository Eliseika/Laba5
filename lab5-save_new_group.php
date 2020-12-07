<?php
require_once 'lab5-connect.php';
$id=$_POST['group_ID'];
$name=$_POST['group_name'];
$faculty=$_POST['group_faculty'];
mysqli_query($connect, "INSERT INTO `Group`(`group_ID`, `group_name`, `group_faculty`) VALUES ('$id', '$name', '$faculty')");
header('location:lab5.php');
?>