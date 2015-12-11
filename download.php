<?php
require('fpdf.php');
$name = $_GET['n'];
$maxSpeed = $_GET['m'];
$description = $_GET['d'];
$contact = $_GET['c'];
$price = $_GET['l'];
$email = $_GET['e'];
$rate = $_GET['r'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10, 'ISP Provider : '.$name, 0, 2);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10, 'Max Speed : '.$maxSpeed, 0, 2);
$pdf->Cell(0,10, 'Conact number : '.$contact, 0, 2);
$pdf->Cell(0,10, 'Email : '.$email, 0, 2);
$pdf->Cell(0,10, 'Lowest Price : '.$price, 0, 2);
$pdf->Cell(0,10, 'Rating : '.$rate, 0, 2);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,20, 'Description', 0, 2);
$pdf->SetFont('Arial','',10);
$pdf->Write(5, $description);
$pdf->Output();