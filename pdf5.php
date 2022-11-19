<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddFont('Castillo');
$pdf->AddPage();
$pdf->SetFont('Castillo','',45);
$pdf->Write(10,'My Favorite Quotes');

$pdf->Ln(20);

$pdf->SetFont('Castillo','',40);
$pdf->Write(20,'Dont judge each day by the harvest you reap but by the seeds that you plant.');
$pdf->Write(20,'-Robert Louis Stevenson');

$pdf->Ln(20);
$pdf->cell(0);

$pdf->AddFont('Boleh');
$pdf->SetFont('Boleh','',30);
$pdf->Write(10,'Tell me and I forget. Teach me and I remember. Involve me and I learn.');
$pdf->Write(10,'-Benjamin Franklin');

$pdf->Ln(20);
$pdf->cell(0);

$pdf->AddFont('KeeponTruckin');
$pdf->SetFont('KeeponTruckin','',35);
$pdf->Write(10,'It is during our darkest moments that we must focus to see the light.');
$pdf->Write(10,'-Aristotle');

$pdf->Ln(20);
$pdf->cell(0);
$pdf->Output('D', 'FavoriteQuotes.pdf');





//Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/KeeponTruckin.ttf