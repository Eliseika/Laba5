<?php
require_once 'PHPExcel/PHPExcel.php';
require_once 'PHPExcel/PHPExcel/Writer/Excel5.php';
require_once 'PHPExcel/PHPExcel/IOFactory.php';
require_once 'lab5-connect.php';
?>
<?
ob_end_clean();
$title = 'Расписание экзаменов';
$array = array("№ п/п", "Дата экзамена", "Аудитория", "Предмет", "Факультет", "Группа");
$obj = new PHPExcel();
$obj->getProperties()->setTitle($title);
$obj->setActiveSheetIndex(0);
$sheet = $obj->getActiveSheet();
$sheet->setTitle($title);
$sheet->getPageSetup()->SetPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
$sheet->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$BStyle = array(
'borders' => array(
'allborders' => array(
'style' => PHPExcel_Style_Border::BORDER_THIN
)
)
);
for($i = 0; $i < count($array); $i++){
$sheet->setCellValueByColumnAndRow($i, 1, $array[$i]);
$sheet->getStyleByColumnAndRow($i, 1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyleByColumnAndRow($i, 1)->applyFromArray($BStyle);
$sheet->getStyleByColumnAndRow($i, 1)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->getStyleByColumnAndRow($i, 1)->getFill()->getStartColor()->setRGB('90ddc7');
}
$j=2;
$query = "SELECT Exam_schedule.exam_ID as id, Exam_schedule.exam_date as date, Exam_schedule.exam_audience as audience, Subjects.predm_name as predm_name, Subjects.predm_faculty as faculty, Group.group_name as group_name FROM `Exam_schedule` LEFT JOIN `Subjects` ON Exam_schedule.predm_ID=Subjects.predm_ID LEFT JOIN `Group` ON Exam_schedule.group_ID=Group.group_ID";
$result = mysqli_query($connect, $query) or die("Умираю!");
while ($row=mysqli_fetch_array($result)){
for($i = 0; $i < count($row)/2; $i++){
$text = $row[$i];
$sheet->setCellValueByColumnAndRow($i, $j, $text);
$sheet->getStyleByColumnAndRow($i, $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyleByColumnAndRow($i, $j)->applyFromArray($BStyle);
$sheet->getStyleByColumnAndRow($i, $j)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$sheet->getStyleByColumnAndRow($i, $j)->getFill()->getStartColor()->setRGB('b5ecdc');
}
$j++;
}
ob_end_clean();
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
ob_end_clean();
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Расписание экзаменов.xls");
$obj->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$obj->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$obj->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$obj->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$obj->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$obj->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objWriter = PHPExcel_IOFactory::createWriter($obj, 'Excel2007');
$objWriter->save('php://output');
ob_end_clean();
?>