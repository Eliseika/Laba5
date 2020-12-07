<?php
require_once 'lab5-connect.php';
$id=$_GET['predm_ID'];
$subj = mysqli_query($connect, "SELECT * FROM `Subjects` WHERE `predm_ID`= '$id' ");
$sub= mysqli_fetch_assoc($subj);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Елисеева Валерия</title>
</head>
<style>
th, td{
padding: 5px;
}
th{
background:#90ddc7;
}
td{
background:#b5ecdc;
}
</style>
<body>
<h2>Редактирование данных</h2>
<form action="lab5-save_edit.php" method="post">
<table>
<tr>
<th>Наименование</th>
<th>Преподаватель</th>
<th>Факультет</th>
<th>Количество лекций</th>
<th>Количество лабораторных</th>
</tr>
<tr>
<td><input type="text" name="predm_name" value="<?= $sub['predm_name']?>"></td>
<td><input type="text" name="predm_teacher" value="<?= $sub['predm_teacher']?>"></td>
<td><input type="text" name="predm_faculty" value="<?= $sub['predm_faculty']?>"></td>
<td><input type="number" name="predm_lectures" value="<?= $sub['predm_lectures']?>"></td>
<td><input type="number" name="predm_lab" value="<?= $sub['predm_lab']?>" ></td>
</tr>
</table><br>
<font color="white"></font><input type="submit" value="Редактировать" >
<input type="hidden" name="predm_ID" value="<?= $sub['predm_ID']?>"><br><br>
</form>
</body>
</html>