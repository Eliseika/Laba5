<?php
require_once 'lab5-connect.php';
require_once ('fpdf17/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->AddFont('Arial','','arial.php');
$pdf->SetFont('Arial','',12);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Cell(15,7,iconv('utf-8', 'windows-1251', "№ п/п"));
$pdf->Cell(35,7,iconv('utf-8', 'windows-1251', "Дата экзамена"));
$pdf->Cell(30,7,iconv('utf-8', 'windows-1251', "Аудитория"));
$pdf->Cell(50,7,iconv('utf-8', 'windows-1251', "Предмет"));
$pdf->Cell(30,7,iconv('utf-8', 'windows-1251', "Факультет"));
$pdf->Cell(30,7,iconv('utf-8', 'windows-1251', "Группа"));
$pdf->Ln();
$pdf->Cell(450,7,"--------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();

$result=mysqli_query($connect, "SELECT Exam_schedule.exam_ID as id, Exam_schedule.exam_date as date, Exam_schedule.exam_audience as audience, Subjects.predm_name as predm_name, Subjects.predm_faculty as faculty, Group.group_name as group_name FROM `Exam_schedule` LEFT JOIN `Subjects` ON Exam_schedule.predm_ID=Subjects.predm_ID LEFT JOIN `Group` ON Exam_schedule.group_ID=Group.group_ID");

        while($rows=mysqli_fetch_array($result))
        {
            $id = $rows['id'];
            $date = $rows['date'];
            $audience = $rows['audience'];
            $predm_name = $rows['predm_name'];
            $faculty = $rows['faculty'];
            $group_name = $rows['group_name'];
            $pdf->Cell(15,7,$id);
            $pdf->Cell(35,7,$date);
            $pdf->Cell(30,7,$audience);
            $pdf->Cell(50,7,iconv('utf-8', 'windows-1251', $predm_name));
            $pdf->Cell(30,7,iconv('utf-8', 'windows-1251', $faculty));
            $pdf->Cell(30,7,iconv('utf-8', 'windows-1251', $group_name)); 
            $pdf->Ln();
            $pdf->Cell(450,7,"--------------------------------------------------------------------------------------------------------------------------------------");
            $pdf->Ln(); 
        }
$pdf->Output();
?>