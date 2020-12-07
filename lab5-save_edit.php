<?php
require_once 'lab5-connect.php';
$id=$_POST['predm_ID'];
$name=$_POST['predm_name'];
$teacher=$_POST['predm_teacher'];
$faculty=$_POST['predm_faculty'];
$lectures=$_POST['predm_lectures'];
$lab=$_POST['predm_lab'];
mysqli_query($connect,"UPDATE `Subjects` SET `predm_ID` = '$id', `predm_name` = '$name', `predm_teacher` = '$teacher', `predm_faculty` = '$faculty', `predm_lectures` = '$lectures', `predm_lab` = '$lab' WHERE `Subjects`.`predm_ID` = '$id' " );
header('Location:lab5.php');
?>