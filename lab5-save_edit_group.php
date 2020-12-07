<?php
require_once 'lab5-connect.php';
$id=$_POST['group_ID'];
$name=$_POST['group_name'];
$faculty=$_POST['group_faculty'];
mysqli_query($connect,"UPDATE `Group` SET `group_ID` = '$id', `group_name` = '$name', `group_faculty` = '$faculty' WHERE `Group`.`group_ID` = '$id' " );
header('Location:lab5.php');
?>