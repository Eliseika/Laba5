<?php
require_once 'lab5-connect.php';
$id=$_GET['exam_ID'];
mysqli_query($connect,"DELETE FROM `Exam_schedule` WHERE `Exam_schedule`.`exam_ID` = '$id' ");
header('Location:lab5.php');
?>