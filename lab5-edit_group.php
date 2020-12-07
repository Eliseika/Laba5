<?php
require_once 'lab5-connect.php';
$id=$_GET['group_ID'];
$groups = mysqli_query($connect, "SELECT * FROM `Group` WHERE `group_ID`= '$id' ");
$group= mysqli_fetch_assoc($groups);
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
<form action="lab5-save_edit_group.php" method="post">
<table>
<tr>
<th>Название</th>
<th>Факультет</th>
</tr>
<tr>
<td><input type="text" name="group_name" value="<?= $group['group_name']?>"></td>
<td><input type="text" name="group_faculty" value="<?= $group['group_faculty']?>"></td>
</tr>
</table><br>
<font color="white"></font><input type="submit" value="Редактировать" >
<input type="hidden" name="group_ID" value="<?= $group['group_ID']?>"><br><br>
</form>
</body>
</html>