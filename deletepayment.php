<?php
include_once("db.php");


$id=$_GET['payment_id'];
$q="DELETE FROM `payment` WHERE `payment_id`=$id";
mysqli_query($con,$q);
$q1="DELETE FROM `tranction` WHERE `voucher`=$id";
mysqli_query($con,$q1);
header('location:viewpaymnet.php');
?>