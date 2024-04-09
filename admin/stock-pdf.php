<?php
require "../pdf/fpdf.php";
$pdf=new FPDF();
$pdf->addpage();
$pdf->setfont("times","B",12);
$pdf->output();
?>