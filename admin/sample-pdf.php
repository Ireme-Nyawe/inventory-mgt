<?php
include "../pdf/fpdf.php";
$report= new FPDF();
$report->addpage();
$report->setfont("Arial","B",15);
$report->cell(40,10,"welcome Pdf");
$report->setfont("Arial","I",15);
$report->cell(50,10,"welcome Pdf",1,0,"C");
$report->output();
?>