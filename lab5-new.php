<?php
require_once 'lab5-connect.php';
?>
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
<h2>Добавление записи о новом предмете</h2>
<form action="lab5-save_new.php" method="post">
<table>
<tr>
<th>ID</th>
<th>Наименование</th>
<th>Преподаватель</th>
<th>Факультет</th>
<th>Количество лекций</th>
<th>Количество лабораторных</th>
</tr>
<tr>
<td><input type="number" name="predm_ID"></td>
<td><input type="text" name="predm_name" maxlength="80"></td>
<td><input type="text" name="predm_teacher" maxlength="50" ></td>
<td><input type="text" name="predm_faculty" maxlength="50"></td>
<td><input type="number" name="predm_lectures"></td>
<td><input type="number" name="predm_lab"></td>
</tr>
</table><br>
<font color="white"></font><input type="submit" value="Внести запись" >
</form>
</body>
</html>