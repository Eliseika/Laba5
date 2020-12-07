<?php
require_once 'lab5-connect.php';
$id=$_GET['group_ID'];
mysqli_query($connect,"DELETE FROM `Group` WHERE `Group`.`group_ID` = '$id' ");
header('Location:lab5.php');
?>