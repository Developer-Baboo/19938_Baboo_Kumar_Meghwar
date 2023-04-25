<?php
require('FPDF/fpdf.php');
if(isset($_POST['submit'])){
// Get the data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$education = $_POST['education'];
$skills = $_POST['skills'];
$experience = $_POST['experience'];
}
// Create a new PDF object
$pdf = new FPDF();
$pdf->AddPage();

// Add the title
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Curriculum Vitae',0,1,'C');

// Add the personal details
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Personal Details',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,7,'Name:',0,0);
$pdf->Cell(0,7,$name,0,1);
$pdf->Cell(30,7,'Email:',0,0);
$pdf->Cell(0,7,$email,0,1);
$pdf->Cell(30,7,'Phone:',0,0);
$pdf->Cell(0,7,$phone,0,1);
$pdf->Cell(30,7,'Address:',0,0);
$pdf->Cell(0,7,$address,0,1);

// Add the profile picture
$pdf->Image('profile.png',10,45,30,15);

// Add the education section
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Education',0,1);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,7,$education);

// Add the skills section
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Skills',0,1);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,7,$skills);

// Add the experience section
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'Experience',0,1);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,7,$experience);

// Output the PDF for download
$pdf->Output('cv.pdf', 'D');
?>