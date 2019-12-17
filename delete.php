<?php
include_once("db.php");


$id=$_GET['customer_id'];

$q="DELETE FROM `customer` WHERE customer_id=$id";
mysqli_query($con,$q);   
header('location:index-3.php');
?>