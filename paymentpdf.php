





<?php
include("db.php");




$width_cell=array(20,50,40,40,40);


$sql="select * from `payment` where  payment_id=(select max(payment_id) from payment)";
$result=mysqli_query($con,$sql);
while ($res=mysqli_fetch_array($result)){
  $RES0= $res['payment_id'];
  $RES1= $res['customer_name'];
  $RES2= $res['Date'];
  $RES3= $res['customer_type'];
  $RES4= $res['paymenttype'];
  $RES5= $res['Bankname'];
  $RES6= $res['Cheque_no'];
  $RES7= $res['drawdate'];
  $RES8= $res['Amount'];

} 




$sql1="select invoice_no, Description,qty,rate,Amount from invoicedetail where invoice_no = (select max(invoice_no) from invoice)";


$result1=mysqli_query($con,$sql1);




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



 $pdf->setfont("Arial", "B", 20);
 $pdf->cell(190,10,"ZA Fabrics",0,1,"C");
 
 $pdf-> cell(190,10,"",0,1);
 $pdf->setfont("Arial", "B",20);
 $pdf->cell(190,10,"Receipt",0,1,"C");
 $pdf->setfont("Arial",null, 12);
 $pdf-> cell(120,7,"",0,1);

 $pdf->SetFillColor(100,100,100);
//Header starts/// 
//First header column //
$pdf->SetFont('Arial',"B",14);

$pdf->Cell($width_cell[0],10,'Id',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'OrderDate',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'Name',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Cheque Number',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'Bank',1,1,'C',true); 

// $pdf->Cell($width_cell[5],10,'voucher',1,1,true); 
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(236,236,236); 
//to give alternate background fill color to rows// 
$fill=false;
 
while ($row=mysqli_fetch_array($result1)) {
    
  $pdf->SetFont('Arial','',12);
  $pdf->Cell($width_cell[0],10,$RES0,1,0,'C');
  $pdf->Cell($width_cell[1],10,$RES2,1,0,'C');
  $pdf->Cell($width_cell[2],10,$RES1,1,0,'C');
  $pdf->Cell($width_cell[3],10,$RES6,1,0,'C');
  $pdf->Cell($width_cell[4],10,$RES5,1,1,'C');
  
  $fill = !$fill;
  }


  $pdf-> cell(190,10,"",0,1);


  $pdf->SetFont('Arial',"B",14);
  $pdf->cell(50,10,"Total:",0,0);

  $pdf->SetFont('Arial',"",14);
  $pdf->cell(50,10,"          ".$RES8,0,1);
 
 
  if($RES3=="Recievable"){
    $pdf->SetFont('Arial',"B",14);
     $pdf->cell(50,10,"Description:",0,0);
     $pdf->SetFont('Arial',"",14);
  $pdf->cell(50,10,"          The payment recieved from".$RES1,0,1);
 }
 else
 {$pdf->SetFont('Arial',"B",14);
     $pdf->cell(50,10,"Description:",0,0);
     $pdf->SetFont('Arial',"",14);
     $pdf->cell(50,10,"          The payment paid ".$RES1,0,1);
 
 
 }
 

 
//  $pdf->cell(50,10,"Payment_Id:",0,0);
//  $pdf->cell(50,10,"          ".$RES0,0,1);
 
//  $pdf->cell(50,10,"OrderDate:",0,0);
//  $pdf->cell(50,10,"          ".$RES2,0,1);
 
//  $pdf->cell(50,10,"Name:",0,0);
//  $pdf->cell(50,10,"          ".$RES1,0,1);
 
//  $pdf->cell(50,10,"Cheque Number:",0,0);
//  $pdf->cell(50,10,"          ".$RES6,0,1);

//  $pdf->cell(50,10,"Bank:",0,0);
//  $pdf->cell(50,10,"          ".$RES5,0,1);

//  $pdf->cell(50,10,"Total:",0,0);
//  $pdf->cell(50,10,"          ".$RES8,0,1);


//  if($RES3=="Recievable"){
//     $pdf->cell(50,10,"Description:",0,0);
//  $pdf->cell(50,10,"          The payment recieved from".$RES1,0,1);
// }
// else
// {
//     $pdf->cell(50,10,"Description:",0,0);
//     $pdf->cell(50,10,"          The payment paid ".$RES1,0,1);


// }





 
$pdf->cell(50,10,"",0,1);


$pdf-> cell(190,10,"",0,1);

$pdf->cell(180,10,"Signature",0,0,"R");



$pdf->SetY(260);
// Arial italic 8
$pdf->SetFont('Arial','I',15);
// Page number

$pdf->Cell(0,10,'GeeksHouse  www.geekshouse.net',0,0,'C');

$pdf->SetFillColor(100,100,100);





$pdf->Output();          


?>