<?php

include("session.php");
include("fpdf.php");

//PDF Generator

class PDF extends FPDF
{
function Header()
{
    // Select Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(20);
    // Framed title
    $this->Cell(150,10,'Pay Slip for Period Ending '.date('F, Y')." "."(RM)",1,0,'C');
    // Line break
    $this->Ln(25);
}

function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'This is autogenerated and signature is not needed',0,0,'C');
}
}

ob_start();
$pdf = new PDF();
$pdf->AddPage();
//Set Border Colour
$pdf->SetDrawColor(220 ,220,220);
$pdf->SetFont('Arial','',10);

//Employee Details
//Name
$pdf->Cell(38,6,"Name",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,$usernamecleaner,1,0,'L');
// Line break
$pdf->Ln(7);

//EmployeeID
$pdf->Cell(38,6,"EmployeeID",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,$user_check,1,0,'L');
// Line break
$pdf->Ln(7);

//Bank
$pdf->Cell(38,6,"Bank",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,$bank,1,0,'L');
// Line break
$pdf->Ln(7);

//BankAccount
$pdf->Cell(38,6,"Account Number",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,$bankaccount,1,0,'L');
// Line break
$pdf->Ln(10);

//Salary Details
//Basic Salary
$pdf->Cell(38,6,"Basic Salary ",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format($nett,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Gross Salary
$pdf->Cell(38,6,"Gross Salary ",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format($gross,2),1,0,'R');
// Line break
$pdf->Ln(10);

//Claims
$pdf->Cell(38,6,"Claims ",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format((float)$claim,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Overtime
$pdf->Cell(38,6,"Overtime ",1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format($overWeekdays,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Allowance
$pdf->Cell(38,6,'Allowance',1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format((float)$totalAllowance,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Bonus
$pdf->Cell(38,6,'Bonus',1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format((float)$bonus,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Tax Deductions
$pdf->Cell(38,6,'Statutory Contribution',1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format($totalTaxEmployee,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Nett Salary
//Bold Font
$pdf->SetFont('Arial','B',10);
$pdf->Cell(38,6,'Nett Salary',1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(140,6,number_format($nett,2),1,0,'R');
// Line break
$pdf->Ln(11);

//Statutory Contribution
$pdf->Cell(182,7,'Statutory Contribution',1,0,'L');
$pdf->Ln(9);
//Header
$pdf->Cell(38,6,'',1,0,'L');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,'Employer',1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,'Employee',1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,'Sub-Total',1,0,'R');

// Line break
$pdf->Ln(7);
//Remove Bold
$pdf->SetFont('Arial','',10);

//EPF
$pdf->Cell(38,6,'EPF',1,0,'C');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($Mepf,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($Eepf,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($Totalepf,2),1,0,'R');
// Line break
$pdf->Ln(7);

//EIS
$pdf->Cell(38,6,'EIS',1,0,'C');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($MEIS,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($EEIS,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($Totaleis,2),1,0,'R');
// Line break
$pdf->Ln(7);

//SOCSO
$pdf->Cell(38,6,'SOCSO',1,0,'C');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($MSocso,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($ESocso,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($TotalSocso,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Total
//Bold Font
$pdf->SetFont('Arial','B',10);
$pdf->Cell(38,6,'Total',1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->SetFont('Arial','',10);
$pdf->Cell(45,6,number_format($totalTaxEmployer,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($totalTaxEmployee,2),1,0,'R');
$pdf->Cell(3,8,'',0); //cell without borders
$pdf->Cell(45,6,number_format($Totaltax,2),1,0,'R');
// Line break
$pdf->Ln(7);

//Output PDF
$pdf->Output('D',$user_check.".pdf",'false');
ob_end_flush();

?>