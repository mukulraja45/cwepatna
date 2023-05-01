<?php 
require('fpdf/fpdf.php');
include "config/config.php";
 include "config/database.php";
 include "classfile/admin.php";
 include "classfile/data.php";
  include "qrcode/qrlib.php";
 $adm=new admin();
    $da=new data();
    $str="";
    $id="";
    if(isset($_GET['reg_no']))
    {
        $id=$_GET['reg_no'];
        $studentinfo=$da->getstudentinfodata($id);
        $newcerificate=$da->certificatedetails($id);
    } 
$imagePath = '../assets/certi.jpeg';
  
$pdf = new FPDF();

$reg = $studentinfo['reg_no'];
$s_name = $studentinfo['s_name'];
$sl_no = $newcerificate['serail_no'];
$f_name = $studentinfo['f_name'];
$course = $studentinfo['course_nm'];
 $test ="<img src='qrcode.php?text=Sl No:$reg' />";
   
    $name = "mukul";
$pdf->AliasNbPages();
$pdf->AddPage('L');
$pdf->Image($imagePath, 0, 0, 297, 210);
$pdf->Image($imagePath, 240, 67, 40, 40);
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(170, 10, $pdf->SetXY(65, 101) .$sl_no, 0, 'L', false);
$pdf->MultiCell(170, 10, $pdf->SetXY(200, 101) . $reg, 0, 'L', false);
$pdf->SetFont('Arial', 'B', 11);
$pdf->MultiCell(80, 10, $pdf->SetXY(75, 113) . $s_name, 0, 'C', false);
$pdf->MultiCell(95, 10, $pdf->SetXY(185, 113) . $f_name, 0, 'C', false);
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(190, 10, $pdf->SetXY(90, 126) . $course, 0, 'C', false);
//$pdf->SetFont('Arial', 'B', 10);
$pdf->MultiCell(160, 10, $pdf->SetXY(20, 140.5) . $name, 0, 'C', false);
$pdf->MultiCell(80, 10, $pdf->SetXY(202, 140.5) . $name, 0, 'C', false);
$pdf->MultiCell(110, 10, $pdf->SetXY(20, 154) . $name, 0, 'C', false);
$pdf->MultiCell(95, 10, $pdf->SetXY(185, 154) . $name, 0, 'C', false);
$pdf->SetFont('Arial', 'B', 13);
$pdf->MultiCell(30, 10, $pdf->SetXY(164, 175.99) . $name, 0, 'C', false);
$pdf->Output();

?>
