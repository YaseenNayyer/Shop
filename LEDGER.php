<?Php

include("db.php");



//SQL to get 10 records



$name=$_POST['customername'];
$type=$_POST['customerType'];

$selectname="select * from `customer` where 	`customer_name`='$name' and `customer_type`='$type' ";
$result2=mysqli_query($con,$selectname);

while($row=mysqli_fetch_array($result2)){
   
  $c_id=$row['customer_id'];
  
 $c_no=$row['customer_contact'];
  
} 





$count="select * from `tranction` where `customer_id`='$c_id' LIMIT 0,10";
$result1=mysqli_query($con,$count);
 $number_of_results=mysqli_num_rows($result1);

 
    
    
      
      

require("fpdf/fpdf.php");
$pdf = new FPDF(); 
$pdf->AddPage();
$pdf->setfont("Arial","u", 30);
 $pdf->cell(190,10,"ZA Fabrics",0,1,"C");
 $pdf-> cell(190,10,"",0,1);
 $width_cell=array(20,50,40,40,40);
$pdf->SetFont('Arial',"B",14);




$pdf->SetFont('Arial',"",14);
$pdf->cell(50,10,"Name:",0,0);
$pdf->cell(50,10,$name,0,1,'C');

$pdf->SetFont('Arial',"B",14);

$pdf->SetFont('Arial',"",14);
$pdf->cell(50,10,"Number:",0,0);
$pdf->cell(50,10,$c_no,0,1,'C');



//Background color of header//
// $pdf->SetFillColor(193,229,252);

$pdf->SetFillColor(100,100,100);
//Header starts/// 
//First header column //
$pdf->SetFont('Arial',"B",14);

$pdf->Cell($width_cell[0],10,'Id',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'Date',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'Description',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Debit',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'Credit',1,1,'C',true); 

// $pdf->Cell($width_cell[5],10,'voucher',1,1,true); 
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(236,236,236); 
//to give alternate background fill color to rows// 
$fill=false;



while ($row=mysqli_fetch_array($result1)) {
    
$pdf->SetFont('Arial','',12);
$pdf->Cell($width_cell[0],10,$row['customer_id'],1,0,'C');
$pdf->Cell($width_cell[1],10,$row['Date'],1,0,'C');
$pdf->Cell($width_cell[2],10,$row['description'],1,0,'C');
$pdf->Cell($width_cell[3],10,$row['Debit'],1,0,'C');
$pdf->Cell($width_cell[4],10,$row['Credit'],1,1,'C');

$fill = !$fill;
}


$pdf->Output();          
?>