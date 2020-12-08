<?php
require_once 'lab5-connect.php';
$id=$_GET['exam_ID'];
$exams = mysqli_query($connect, "SELECT Exam_schedule.exam_ID as exam_ID, Exam_schedule.exam_date as exam_date, Exam_schedule.exam_consultation_date as exam_consultation_date, Exam_schedule.group_ID as group_ID, Exam_schedule.predm_ID as predm_ID, Exam_schedule.exam_audience as exam_audience, Subjects.predm_name as predm_name,  Group.group_name as group_name FROM `Exam_schedule` LEFT JOIN `Subjects` ON Exam_schedule.predm_ID=Subjects.predm_ID LEFT JOIN `Group` ON Exam_schedule.group_ID=Group.group_ID WHERE `exam_ID`= '$id' ");
$exam= mysqli_fetch_assoc($exams);
$group_ID = $exam['group_ID'];
$group_name = $exam['group_name'];
$predm_ID = $exam['predm_ID'];
$predm_name = $exam['predm_name'];
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
<form action="lab5-save_edit_exam.php" method="post">
<table>
<tr>
<th>ID группы</th>
<th>ID предмета</th>
<th>Дата консультации</th>
<th>Дата экзамена</th>
<th>Аудитория</th>
</tr>
<tr>
<td><?php
$result = mysqli_query($connect,"SELECT * FROM `Group`");
echo "<select name='group_ID'>";
echo "<option value='$group_ID'>$group_name</option>";
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
echo "<option value='$predm_ID'>$predm_name</option>";
if ($result) {
while ($row = $result->fetch_array()) {
$predm_ID = $row['predm_ID'];
$predm_name = $row['predm_name'];
echo "<option value='$predm_ID'>$predm_name</option>";
}
}
echo "</select>";
?></td>
<td><input type="text" name="exam_consultation_date" value="<?= $exam['exam_consultation_date']?>"></td>
<td><input type="text" name="exam_date" value="<?= $exam['exam_date']?>"></td>
<td><input type="text" name="exam_audience" value="<?= $exam['exam_audience']?>" ></td>
</tr>
</table><br>
<font color="white"></font><input type="submit" value="Редактировать" >
<input type="hidden" name="exam_ID" value="<?= $exam['exam_ID']?>"><br><br>
</form>
</body>
</html>
