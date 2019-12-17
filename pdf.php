





<?php
include("db.php");







$sql="select * from `invoice` where  invoice_no = (select max(invoice_no) from invoice)";
$result=mysqli_query($con,$sql);
while ($res=mysqli_fetch_array($result)){

  $RES1= $res['customer_id'];
  $RES2= $res['customer_name'];
  $RES3= $res['Date'];
  $RES4= $res['TotalAmount'];
} 








require("fpdf/fpdf.php");


$pdf = new FPDF();
$pdf->AddPage();
// $pdf->SetFont('Arial','B',19);
 
// $pdf->Cell(110,5,'ZA Fabrics',1,0);
//  $pdf->Cell(79,5,'Invoice',1,1);

//  $pdf->SetFont('Arial','B',11);
//  $pdf->Cell(110,5,'ID',1,0);
//  $pdf->Cell(79,5,$RES1,1,1); 

//  $pdf->Cell(110,5,'Date',1,0);
//  $pdf->Cell(79,5,$RES2,1,1); 
//  $pdf->Cell(110,5,'ID',1,0);
//  $pdf->Cell(79,5,$RES3,1,1); 

//  $pdf->Cell(110,5,'TotalAmount',1,0);
//  $pdf->Cell(79,5,$RES4,1,1); 

//  $pdf->Cell(110,5,'Description',1,0);
//  $pdf->Cell(79,5,$RES5,1,1); 

//  $pdf->Cell(110,5,'qty',1,0);
//  $pdf->Cell(79,5,$RES6,1,1); 

//  $pdf->Cell(110,5,'rate',1,0);
//  $pdf->Cell(79,5,$RES7,1,1); 
//  $pdf->Cell(110,5,'Amount',1,0);
//  $pdf->Cell(79,5,$RES8,1,1); 

//  $pdf->Cell(110,5,'Description',1,0);
//  $pdf->Cell(79,5,$RES9,1,1); 


//  $pdf->Cell(110,5,'qty',1,0);
//  $pdf->Cell(79,5,$RES10,1,1); 


//  $pdf->Cell(110,5,'rate',1,0);
//  $pdf->Cell(79,5,$RES11,1,1); 



//  $pdf->Cell(110,5,'Amount',1,0);
//  $pdf->Cell(79,5,$RES12,1,1); 



 $pdf->setfont("Arial", "B", 16);
 $pdf->cell(190,10,"ZA Fabrics",0,1,"C");
 $pdf->setfont("Arial",null, 12);
 $pdf->cell(50,10,"order date",0,0);
 $pdf->cell(50,10,":".$RES3,0,1);
 
 $pdf->cell(50,10,"Customer Name",0,0);
 $pdf->cell(50,10,":".$RES2,0,1);
 
 $pdf-> cell(190,10,"",0,1);
 
 $pdf->cell(10,10,"#",1,0,"C");
 $pdf->cell(70,10,"Product Name",1,0,"C");
 $pdf->cell(30,10,"Quantity",1,0,"C");
 $pdf->cell(40,10,"Price",1,0,"C");
 $pdf->cell(40,10,"Total (Rs)",1,1,"C");


 $sql1="select invoice_no, Description,qty,rate,Amount from invoicedetail where invoice_no = (select max(invoice_no) from invoice)";


$result1=mysqli_query($con,$sql1);
while ($res1=mysqli_fetch_array($result1)) {
  
  $RES5= $res1['Description'];
  $RES6= $res1['qty'];
  $RES7= $res1['rate'];
  $RES8= $res1['Amount'];



$pdf->cell(10,10,(1),1,0,"C");
$pdf->cell(70,10,$RES5,1,0,"C");
$pdf->cell(30,10,$RES6,1,0,"C");
$pdf->cell(40,10,$RES7,1,0,"C");
$pdf->cell(40,10,$RES8,1,1,"C");
}


$pdf->cell(50,10,"",0,1);

$pdf->cell(50,10,"sub Total",0,0);
$pdf->cell(50,10,": ".$RES4,0,1);


$pdf->cell(50,10,"Description",0,0);
$pdf->cell(50,10,": ".$RES5,0,1);


$pdf->cell(180,10,"Signature",0,0,"R");



$pdf->SetY(260);
// Arial italic 8
$pdf->SetFont('Arial','I',15);
// Page number

$pdf->Cell(0,10,'GeeksHouse  www.geekshouse.net',0,0,'C');







$pdf->Output();



?>