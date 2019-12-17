<?php
include("db.php");

$id=$_GET['invoice_no'];

session_start();



if(!isset($_SESSION['username']))
{header('location:index.php');}

 $result_per_page=10;





//  $sql="select * from `invoice` where  invoice_no = (select max(invoice_no) from invoice)";

$sql="select * from `invoice` where  invoice_no = '$id'";

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

 
 
  $pdf->setfont("Arial", "B", 22);
  $pdf->cell(190,10,"ZA Fabrics",0,1,"C");
  $pdf-> cell(190,10,"",0,1);
  
  $pdf->setfont("Arial",null, 12);
  $pdf->cell(25,10,"Date:",0,0);
  $pdf->cell(25,10,"".$RES3,0,1);
  
  $pdf->cell(25,10,"Customer:",0,0);
  $pdf->cell(25,10,"".$RES2,0,1);
  
  $pdf-> cell(190,10,"",0,1);
  $pdf->setfont("Arial","B", 12);
  $pdf->cell(10,10,"#",1,0,"C");
  $pdf->cell(70,10,"Product Name",1,0,"C");
  $pdf->cell(30,10,"Quantity",1,0,"C");
  $pdf->cell(40,10,"Price",1,0,"C");
  $pdf->cell(40,10,"Total (Rs)",1,1,"C");
  $pdf->setfont("Arial",null, 12);
  
 
//   $sql1="select invoice_no, Description,qty,rate,Amount from invoicedetail where invoice_no = (select max(invoice_no) from invoice)";
$sql1="select invoice_no, Description,qty,rate,Amount from invoicedetail where invoice_no = '$id'";
 
 $result1=mysqli_query($con,$sql1);
 while ($res1=mysqli_fetch_array($result1)) {
    global $x;


    $x=$x+1;
   $RES5= $res1['Description'];
   $RES6= $res1['qty'];
   $RES7= $res1['rate'];
   $RES8= $res1['Amount'];
 
 
 
 $pdf->cell(10,10,($x),1,0,"C");
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
 
 $pdf-> cell(190,10,"",0,1);
 $pdf->cell(180,10,"Signature",0,0,"R");
 
 
 
 $pdf->SetY(260);
 // Arial italic 8
 $pdf->SetFont('Arial','I',15);
 // Page number
 
 $pdf->Cell(0,10,'GeeksHouse  www.geekshouse.net',0,0,'C');
 
 
 
 
 
 
 
 $pdf->Output();
 
 












?>
