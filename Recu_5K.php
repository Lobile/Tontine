<?php
   require_once 'FPDF/fpdf.php';
   $mysqli = new mysqli('localhost', 'root', '', 'meetings') or die(mysqli_error($mysqli));
   $today=date("Y-m-d");
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->Image("img/white.jpeg", 155, 2,50,30);
   $pdf->SetFont("Arial","B", 16);
   $pdf->SetTextColor(0, 0, 0);
   $pdf->Cell(30,20,"Date:$today","0","1","C");
   $pdf->SetFont("Arial","B", 16);
   $pdf->SetTextColor(0, 120, 120);
   $pdf->Cell(200,20,"Contribution of 5000 Beneficiary Receipt","0","1","C");
   //table column
   $pdf->setLeftMargin(30);
   $pdf->SetTextColor(0,0,0);
   $pdf->Cell(20,10,"No:","0","0","C");
   $pdf->Cell(40,10,"Firstame:","0","0","C");
   $pdf->Cell(40,10,"Lastname:","0","0","C");
   $pdf->Cell(40,10,"Benefit:","0","1","C");
    $pdf->SetFont("times","",14);
    //table rows
  
    $result=$mysqli->query("select member_id,firstname, lastname, contribution_benefit from member inner join contribution on member_id=contribution_id where contribution_benefit!=0 and contribution_amount=5000") or die($mysqli->error);
    while($row=$result->fetch_assoc()):
        $pdf->Cell(20,10,$row['member_id'],"0","0","C");
        $pdf->Cell(40,10,$row['firstname'],"0","0","C");
        $pdf->Cell(40,10,$row['lastname'],"0","0","C");
        $pdf->Cell(40,10,$row['contribution_benefit'],"0","1","C");
    endwhile;
    
    $pdf->SetTextColor(0, 120, 120);
    $pdf->SetFont("Arial","U", 16);
   $pdf->Cell(100,10,"Those who did not contributed","0","1","C");
   //table column
   $pdf->setLeftMargin(30);
   $pdf->SetTextColor(0,0,0);
   $pdf->SetFont("times","B", 16);
   $pdf->Cell(20,10,"No","1","0","C");
   $pdf->Cell(40,10,"Firstame","1","0","C");
   $pdf->Cell(40,10,"Lastname","1","1","C");
  
    $pdf->SetFont("times","",14);
    //table rows
 
    $result1=$mysqli->query("select member_id,firstname, lastname from member inner join contribution on member_id=contribution_id where contribution_payment like 'not_paid5%' or contribution_paidfine like 'not_paid5%'") or die($mysqli->error);
    while($row=$result1->fetch_assoc()):
        $pdf->Cell(20,10,$row['member_id'],"1","0","C");
        $pdf->Cell(40,10,$row['firstname'],"1","0","C");
        $pdf->Cell(40,10,$row['lastname'],"1","1","C");
       
    endwhile;
   
    $pdf->Cell(40,20,"Signature","0","1");
    $pdf->Cell(40,10,"","1","1");
   $pdf->Output();
?>