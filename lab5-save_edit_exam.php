<?php
require_once 'lab5-connect.php';
$id=$_POST['exam_ID'];
$groupid=$_POST['group_ID'];
$predmid=$_POST['predm_ID'];
$consdate=$_POST['exam_consultation_date'];
$date=$_POST['exam_date'];
$aud=$_POST['exam_audience'];
mysqli_query($connect,"UPDATE `Exam_schedule` SET `exam_ID` = '$id', `group_ID` = '$groupid', `predm_ID` = '$predmid', `exam_consultation_date` = '$consdate', `exam_date` = '$date', `exam_audience` = '$aud' WHERE `Exam_schedule`.`exam_ID` = '$id' " );
header('Location:lab5.php');
?>