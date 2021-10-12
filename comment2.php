<?php
   require_once 'FPDF/fpdf.php';
   $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
   $today=date("d-m-Y");
   
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->Image("img/white.jpeg", 155, 2,50,30);
   $pdf->SetFont("Arial","B", 16);
   $pdf->SetTextColor(0, 0, 0);
   $pdf->Cell(30,20,"Date:$today","0","1","C");
   $pdf->SetFont("Arial","B", 16);
   $pdf->SetTextColor(0, 120, 120);
   $pdf->Cell(200,20,"Report of Last session","0","1","C");
   //table column
   $pdf->setLeftMargin(30);
   $pdf->SetTextColor(0,0,0);
    $pdf->SetFont("times","",14);
    //table rows
  
    $result=$mysqli->query("SELECT * FROM report where Report_date = curdate()") or die($mysqli->error);
    while($row=$result->fetch_assoc()):
        $pdf->Cell(20,10,$row['report_name'],"0","1","C");
        $pdf->Cell(40,10,$row['Salut'],"0","1");
        $pdf->Cell(40,10,$row['object'],"0","1");
        $pdf->Cell(40,10,$row['message'],"0","1");
        $pdf->Cell(40,10,$row['projects'],"0","1");
        $pdf->Cell(40,10,$row['goals'],"0","1");
    endwhile;
    $pdf->Cell(40,20,"Signature","0","1");
    $pdf->Cell(40,10,"","1","1");
   $pdf->Output();
?>