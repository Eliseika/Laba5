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
<h2>Добавление записи о новой группе</h2>
<form action="lab5-save_new_group.php" method="post">
<table>
<tr>
<th>ID</th>
<th>Название</th>
<th>Факультет</th>
</tr>
<tr>
<td><input type="number" name="group_ID"></td>
<td><input type="text" name="group_name" maxlength="50"></td>
<td><input type="text" name="group_faculty" maxlength="50"></td>
</tr>
</table><br>
<font color="white"></font><input type="submit" value="Внести запись" >
</form>
</body>
</html>