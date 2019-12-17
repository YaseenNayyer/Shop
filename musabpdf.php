<?php 
session_start();
include('../database/db.php');  
include('../functions/functions.php');


if (isset($_SESSION['cus_id'])) {
    $cus_id=$_SESSION['cus_id'];
  }
  
if (isset($_GET['invoice'])) {
    $inv_no=$_GET['invoice'];
  }

$query="select * from customer_orders where invoice_no='$inv_no'";
$run=mysqli_query($con,$query);



date_default_timezone_set("Asia/Karachi");
date_default_timezone_get();
$date=date("d-m-Y , h:m:s");

require('../library/fpdf.php');

class PDF extends FPDF
{
// Page header


// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln(2);
$pdf->SetTextColor(109, 180, 68);//color
$pdf->SetFont('Times','B',12);//text

$pdf->Cell(55, 0, "SUPPLIER ", 0, 0);

$pdf->Image('EcoLogo.png',65,8,70,'C');
$pdf->Cell(95, 8, " ", 0, 0);

$pdf->Cell(40, 0, "CLIENT ", 0, 1 ,'R');










$pdf->SetTextColor(0,0,0);//color
$pdf->Cell(55, 12, "Mr/Miss.Admin ", 0, 0 ,'L');
$pdf->Cell(95, 12, "", 0, 0);
$pdf->Cell(40, 12, "Mr/Miss.Musab ", 0, 1 ,'R');

$pdf->SetTextColor(105, 104, 104);//color
$pdf->SetFont('Times','',12);//text

$pdf->Cell(55, -1, "EchoOrganic@email.com", 0, 0 ,'L');
$pdf->Cell(97, -1, "", 0, 0);
$pdf->Cell(40, -1, "musab@email.com  ", 0, 1 ,'R');


$pdf->Cell(55, 12, "03225545457", 0, 0 ,'L');
$pdf->Cell(95, 12, "", 0, 0);
$pdf->Cell(40, 12, "03174545454", 0, 1 ,'R');

$pdf->SetDrawColor(232, 232, 232);



$pdf->SetFont('Times','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Line(10,38, 200, 38);
$pdf->Ln(10);
    while ($row=mysqli_fetch_array($run)) {
    
$order_id=$row['order_id'];
$total=$row['due_amout'];
    $pdf->Cell(55, 8, "Order No ", 0, 0);
    $pdf->SetFont('Times', '', 12);
    
    $pdf->Cell(58, 8, $row['invoice_no'], 0, 0);

    $pdf->SetFont('Times', 'B', 12 );

    $pdf->Cell(25, 8, "Date : ", 0, 0);
    $pdf->SetFont('Times', '', 12);

    $pdf->Cell(52, 8, $date, 0, 1);
    $pdf->SetFont('Times', 'B', 12 );

    $pdf->Cell(55, 8, "Total Amount", 0, 0);
    $pdf->SetFont('Times', '', 12);

    $pdf->Cell(58, 8, $row['due_amout'], 0, 0);
    $pdf->SetFont('Times', 'B', 12 );

    $pdf->Cell(25, 8, "Status : ", 0, 0);
    $pdf->SetFont('Times', '', 12);

    $pdf->Cell(52, 8, $row['order_status'], 0, 1);
    $pdf->SetFont('Times', 'B', 12 );


    }
   

    $pdf->Line(10,68, 200, 68);
    $pdf->Ln(10);
    $pdf->SetDrawColor(109, 180, 68);
 
    $pdf->Rect(10,71,190,10,"D");

    $pdf->SetDrawColor(232, 232, 232);

    $pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(15, 10, "#", 0, 0,'C');
$pdf->Cell(60, 10, "Product Name", 0, 0, '');
$pdf->Cell(40, 10, "Price", 0, 0, '');
$pdf->Cell(40, 10, "Qty", 0, 0  , '');
$pdf->Cell(40, 10, "Total", 0, 1  , '');
$pdf->Ln(5);

$select_details="select * from order_details where order_id='$order_id'";
$run_details=mysqli_query($con,$select_details);
    
$pdf->SetFont('Arial', '', 12);

$i=0;
while ($row_details=mysqli_fetch_array($run_details)) 
{
    $p_id=$row_details['product_id'];
    $select_price="select * from products where product_id='$p_id'";
    $run_price=mysqli_query($con,$select_price);
    while($row_price=mysqli_fetch_array($run_price))
       {
        

        $i++;
        $pdf->Cell(15, 10, $i, 0, 0,'C');
        $pdf->Cell(60, 10, $row_details['product_name'], 0, 0, '');
        $pdf->Cell(40, 10, $row_price['product_price'], 0, 0, '');
        $pdf->Cell(40, 10, "x ".$row_details['product_qty'], 0, 0, '');
        $pdf->Cell(40, 10, $row_details['product_price'], 0, 1, '');
     
        

        }
    
}

$pdf->SetDrawColor(109, 180, 68);

    $pdf->Line(140,120, 200, 120);

$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(150, 20, "Total : ", 0, 0,'R');
$pdf->Cell(26, 20, $total, 0, 1,'C');




    $pdf->Output();
    // $pdf->Cell(40, 10, "Phone", 1, 0);
    // $pdf->Cell(40, 10, "Qty", 1, 0);
    // $pdf->Cell(40, 10, "Total", 1, 1);

    // $pdf->SetFont('Arial', '', 14);
 
    
        // $pdf->Cell(40, 10, $row['order_phone'], 1, 0);
        // $pdf->Cell(40, 10, $row['total_products'], 1, 0);
        // $pdf->Cell(40, 10, $row['due_amout'], 1, 1);
    


    // $pdf=new FPDF('p', 'mm', 'A4');
    // $pdf->AddPage();
    // $pdf->SetFont('Arial', 'B', 14 );
    // $pdf->Cell(55, 5, "Order No ", 1, 0);
    // $pdf->Cell(40, 10, "Phone", 1, 0, 'C');
    // $pdf->Cell(40, 10, "Qty", 1, 0, 'C');
    // $pdf->Cell(40, 10, "Total", 1, 1, 'C');

    // $pdf->SetFont('Arial', '', 14);
    // while ($row=mysqli_fetch_array($run)) {
    //     $pdf->Cell(40, 10, $row['invoice_no'], 1, 0, 'C');
    //     $pdf->Cell(40, 10, $row['order_phone'], 1, 0, 'C');
    //     $pdf->Cell(40, 10, $row['total_products'], 1, 0, 'C');
    //     $pdf->Cell(40, 10, $row['due_amout'], 1, 1, 'C');
    
    // }



    $pdf->Output();





?>