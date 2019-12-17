<?php
include_once("db.php");


$id=$_GET['invoice_no'];
$q="DELETE FROM `invoice` WHERE invoice_no=$id";
mysqli_query($con,$q);
if($q==0)
{
    $q1="DELETE FROM `invoicedetail` WHERE invoice_no=$id";
    mysqli_query($con,$q1);

    
}

$q1="DELETE FROM `tranction` WHERE `voucher`=$id";
mysqli_query($con,$q1);
header('location:manageinvoice.php');



?>