<?php
require_once 'lab5-connect.php';
$id=$_GET['exam_ID'];
$exams = mysqli_query($connect, "SELECT * FROM `Exam_schedule` WHERE `exam_ID`= '$id' ");
$exam= mysqli_fetch_assoc($exams);
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
<td><input type="number" name="group_ID" value="<?= $exam['group_ID']?>"></td>
<td><input type="number" name="predm_ID" value="<?= $exam['predm_ID']?>"></td>
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