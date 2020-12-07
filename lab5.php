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
A:link {
text-decoration: none;
font-weight: bold;
color: #3F469D;
}
A:visited {
text-decoration: none;
font-weight: bold;
color: #3F469D;
}
A:active {
text-decoration: none;
font-weight: bold;
color: #3F469D;
}
A:hover {
font-weight: bold;
text-decoration: underline;
color: #3F469D;
}
</style>
<body>
<h2>Лабораторная работа №5. 10 вариант.</h2>
<h2>Предметы</h2>
<table>
<tr>
<th>ID</th>
<th>Наименование</th>
<th>Преподаватель</th>
<th>Факультет</th>
<th>Количество лекций</th>
<th>Количество лабораторных</th>
<th colspan="2"><a href="lab5-new.php">[Внести запись о новом предмете]</a></th>
</tr>
<?php
$subj= mysqli_query($connect,"SELECT * FROM `Subjects`");
$subj = mysqli_fetch_all($subj);
foreach ($subj as $sub) {
?>
<tr>
<td><?= $sub[0]?></td>
<td><?= $sub[1]?></td>
<td><?= $sub[2]?></td>
<td><?= $sub[3]?></td>
<td><?= $sub[4]?></td>
<td><?= $sub[5]?></td>
<td><a href="lab5-edit.php?predm_ID=<?= $sub[0] ?>">Редактировать</a></td>
<td><a href="lab5-delete.php?predm_ID=<?= $sub[0]?>">Удалить</a></td>
</tr>
<?php
}
?>
</table>
<h2>Группы</h2>
<table>
<tr>
<th>ID</th>
<th>Название</th>
<th>Факультет</th>
<th colspan="2"><a href="lab5-new_group.php">[Внести запись о новой группе]</a></th>
</tr>
<?php
$groups= mysqli_query($connect,"SELECT * FROM `Group`");
$groups = mysqli_fetch_all($groups);
foreach ($groups as $group) {
?>
<tr>
<td><?= $group[0]?></td>
<td><?= $group[1]?></td>
<td><?= $group[2]?></td>
<td><a href="lab5-edit_group.php?group_ID=<?= $group[0] ?>">Редактировать</a></td>
<td><a href="lab5-delete_group.php?group_ID=<?= $group[0]?>">Удалить</a></td>
</tr>
<?php
}
?>
</table>
<h2>Расписание экзаменов</h2>
Если запись не добавилась, значит вы пытались добавить экзамен по предмету, который уже есть у группы.
У группы может быть только один зачет/экзамен по конкретному предмету!
<table>
<tr>
<th>ID</th>
<th>ID группы</th>
<th>ID предмета</th>
<th>Дата консультации</th>
<th>Дата экзамена</th>
<th>Аудитория</th>
<th colspan="2"><a href="lab5-new_exam.php">[Внести запись о новом экзамене]</a></th>
<th><a href="proba2.php">PDF</a></th>
<th><a href="proba3.php">Excel</a></th>
</tr>
<?php
$exams= mysqli_query($connect,"SELECT * FROM `Exam_schedule`");
$exams = mysqli_fetch_all($exams);
foreach ($exams as $exam) {
?>
<tr>
<td><?= $exam[0]?></td>
<td><?= $exam[1]?></td>
<td><?= $exam[2]?></td>
<td><?= $exam[3]?></td>
<td><?= $exam[4]?></td>
<td><?= $exam[5]?></td>
<td><a href="lab5-edit_exam.php?exam_ID=<?= $exam[0] ?>">Редактировать</a></td>
<td><a href="lab5-delete_exam.php?exam_ID=<?= $exam[0]?>">Удалить</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>