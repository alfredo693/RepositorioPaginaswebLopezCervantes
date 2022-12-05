<?php
$nombre=$_POST['nombre'];
require('/FPDF/fpdf.php');

$pdf=nuevoFPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Jose Alfredo Lopez Cervantes'. $nombre);
$pdf->Salida();
?>