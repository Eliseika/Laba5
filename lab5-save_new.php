<?php
require_once 'lab5-connect.php';
$id=$_POST['predm_ID'];
$name=$_POST['predm_name'];
$teacher=$_POST['predm_teacher'];
$faculty=$_POST['predm_faculty'];
$lectures=$_POST['predm_lectures'];
$lab=$_POST['predm_lab'];
mysqli_query($connect, "INSERT INTO `Subjects`(`predm_ID`, `predm_name`, `predm_teacher`, `predm_faculty`, `predm_lectures`, `predm_lab`) VALUES ('$id', '$name', '$teacher', '$faculty', '$lectures', '$lab')");
header('location:lab5.php');
?>