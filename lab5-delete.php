<?php
require_once 'lab5-connect.php';
$id=$_GET['predm_ID'];
mysqli_query($connect,"DELETE FROM `Subjects` WHERE `Subjects`.`predm_ID` = '$id' ");
header('Location:lab5.php');
?>