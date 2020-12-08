<?php
require_once 'lab5-connect.php';
$consultation_date = date('d-m-Y', strtotime($consultation_date));
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
<h2>Добавление записи о новом экзамене</h2>
<form action="lab5-save_new_exam.php" method="post">
<table>
<tr>
<th>ID</th>
<th>Группа</th>
<th>Предмет</th>
<th>Дата консультации</th>
<th>Дата экзамена</th>
<th>Аудитория</th>
</tr>
<tr>
<td><input type="number" name="exam_ID"></td>
<td><?php
$result = mysqli_query($connect,"SELECT * FROM `Group`");
echo "<select name='group_ID'>";
if ($result) {
while ($row = $result->fetch_array()) {
$group_ID = $row['group_ID'];
$group_name = $row['group_name'];
echo "<option value='$group_ID'>$group_name</option>";
}
}
echo "</select>";
?></td>
<td><?php
$result = mysqli_query($connect, "SELECT * FROM `Subjects`");
echo "<select name='predm_ID'>";
if ($result) {
while ($row = $result->fetch_array()) {
$predm_ID = $row['predm_ID'];
$predm_name = $row['predm_name'];
echo "<option value='$predm_ID'>$predm_name</option>";
}
}
echo "</select>";
?></td>
<td><input type="text" name="exam_consultation_date" maxlength="50"></td>
<td><input type="text" name="exam_date"></td>
<td><input type="text" name="exam_audience" maxlength="10"></td>
</tr>
</table><br>
<font color="white"></font><input type="submit" value="Внести запись" >
</form>
</body>
</html>