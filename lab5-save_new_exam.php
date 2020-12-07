<?php
require_once 'lab5-connect.php';
$id=$_POST['exam_ID'];
$groupid=$_POST['group_ID'];
$predmid=$_POST['predm_ID'];
$consdate=$_POST['exam_consultation_date'];
$date=$_POST['exam_date'];
$aud=$_POST['exam_audience'];
mysqli_query($connect, "INSERT INTO `Exam_schedule`(`exam_ID`, `group_ID`, `predm_ID`, `exam_consultation_date`, `exam_date`, `exam_audience`) VALUES ('$id', '$groupid', '$predmid', '$consdate', '$date', '$aud')");
header('location:lab5.php');
?>