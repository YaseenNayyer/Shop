<?php
$id=$_GET['id'];



session_start();



if(!isset($_SESSION['username']))
{header('location:index.php');}





include_once("db.php");

$q="SELECT * FROM invoicedetail WHERE id='$id'";
$trans="SELECT * FROM invoice ";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inspire - Admin and Dashboard Template</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


</head>
<body>
<div class="app header-default side-nav-dark">
<div class="layout">

<div class="header navbar" style="background-color: #3F729B;">
<div class="header-container">
<div class="nav-logo">
<a href="admin.php">
<b><img src="" alt=""></b>
<span class="logo">
<img src="assets/img/yaseen.jpg" alt="">
</span>
</a>
</div>
<ul class="nav-left">
<li>
<a class="sidenav-fold-toggler" href="javascript:void(0);">
<i class="lni-menu"></i>
</a>
<a class="sidenav-expand-toggler" href="javascript:void(0);" style="color: white;">
<i class="lni-menu"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="search-box">

<i class=""></i>
</li>



<li class="list-item">

<div class="media-img">
<div class="icon-avatar bg-info">

</div>
<button style="margin-top:20%;"   class="btn btn-light"  aria-pressed="false" autocomplete="off">
<a href="logout.php" >Logout</a>
</button>
</div>

<!-- <button type="button" class="btn btn-outline-primary">Logout</button> -->

</div>
<h1 style="margin-left: 45%; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: white; margin-top: 10px;">ZA Fabrics</h1>

</div>


<div class="side-nav expand-lg">
<div class="side-nav-inner">
<ul class="side-nav-menu">
<li class="side-nav-header">
<span>Admit Panel</span>
</li>
<li class="nav-item dropdown open">
<a href="#" class="dropdown-toggle">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">Customer</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li class="active">
<a href="index-2.php">-Add </a>
</li>
<li><span class="badge badge-primary badge-pro float-right"></span>
<a href=index-3.php>-Manage</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-cloud"></i>
</span>
<span class="title">Bill</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="bill.php">-Add</a>
</li>
<li><span class="badge badge-primary badge-pro float-right"></span>
<a href="manageinvoice.php">-Manage</a>
</li>

</ul>
</li>
<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-layers"></i>
</span>
<span class="title">Payment</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="payment.php">-Add</a>
</li>
<li>
<a href="viewpaymnet.php">-Manage</a>
 </li>

</ul>
</li>

<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-layers"></i>
</span>
<span class="title">Ledger</span>
<span class="arrow">
<i class="lni-chevron-right"></i>
</span>
</a>
<ul class="dropdown-menu sub-down">
<li>
<a href="ledgerform.php">-Add</a>
</li>




</ul>
</li>




</div>
</div>


<div class="page-container">

<div class="main-content">

<div class="container-fluid">


<div class="row">
<div class="col-md-8">


<div class="container">
  

  <h1>Update Invoice</h1>
<?php
while ($row=mysqli_fetch_array($result)) {
	

  ?>
  <form id="MyFormInvoice"  method="post">
  
  <div class="form-group">
      
      <input type="hidden" class="form-control" id="email"  name="invoice_no" value="<?php echo $row['id']; ?>">
    </div>  


  <div class="form-group">
      
      <input type="hidden" class="form-control" id="email"  name="invoice_no" value="<?php echo $row['invoice_no']; ?>">
    </div>
  
  
  
  
  <div class="form-group">
      <label >Description:</label>
      <input type="text" class="form-control" id="Description"  name="Description" maxlength="30" value="<?php echo $row['Description']; ?>">
      <small id="des_error" class="form-text text-muted"></small>
    </div>
    
    <div class="form-group">
      <label >Quantiy:</label>
      <input type="text" class="form-control" id="Qantity"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3" name="Qantity" value="<?php echo $row['qty']; ?>">
      <small id="qty_error" class="form-text text-muted"></small>
    </div>
    

    <div class="form-group">
      <label >Rate</label>
      <input type="text" class="form-control" id="Rate"  name="Rate" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3" value="<?php echo $row['rate']; ?>">
      <small id="rt_error" class="form-text text-muted"></small>
    </div>

	
    
    <button type="submit" name="submit" >submit</button>
    <!-- <input type="submit" name="submit"> -->
  </form>
</div>
</div>
</div>
</div>
<?php
}
?>
</body>
</html>

 
 <script>
$(document).ready(function(){

$("#MyFormInvoice").on("submit",function () {
			if ($("#Description").val()==""  ) {
        $("#Description").addClass("border-danger");
				$("#des_error").html("<span class ='text-danger'>Please Enter DISCRIPTION</span>");
      }
      else if($("#Qantity").val()=="" ){
        $("#Qantity").addClass("border-danger");
				$("#qty_error").html("<span class ='text-danger'>Please Enter quantity</span>");
      }
       
 else if($("#Rate").val()==""){
  $("#Rate").addClass("border-danger");
				$("#rt_error").html("<span class ='text-danger'>Please Enter amount</span>");
      
      }
else{
				$.ajax({
					url : "updateinvoice.php",
					method : "POST",
					data : $("#MyFormInvoice").serialize(),
					success : function(data){
            
         //   alert(data);
            if(data==data){
              alert("Updated");
           window.location.href="";
              $("#Description").removeClass("border-danger");
            $("#des_error").html("<span class ='text-success'>Update</span>");
            $("#Qantity").removeClass("border-danger");
            $("#qty_error").html("<span class ='text-success'>Update</span>");
            $("#Rate").removeClass("border-danger");
            $("#rt_error").html("<span class ='text-success'>Update</span>");
          
            }
            
          
					}

				})

			}
		})

  })
</script>  







<?php

if(isset($_POST['submit']))
{
$id=$_GET['id'];
$I_NO=$_POST['invoice_no'];
$Description=$_POST['Description'];
$Qantity=$_POST['Qantity'];

$Rate=$_POST['Rate'];


$amount=$Qantity*$Rate;





if($Qantity=="" or $Rate=="" or $Description=="")
{
// echo "<script>alert('Please fill all the fields')</script>";
}
else{

$q="UPDATE `invoicedetail` SET `Description`='$Description',`qty`='$Qantity',`rate`='$Rate',`Amount`='$amount' WHERE `id`='$id'";
$query=mysqli_query($con,$q);


if($q==0)
{
  $am="SELECT SUM(`Amount`) AS `TA` from  `invoicedetail` where `invoice_no`='$I_NO'";
  $result2=mysqli_query($con,$am);      
  while($data=mysqli_fetch_array($result2)) {
  $TAMOUNT=$data['TA']; 
  echo $TAMOUNT;
  }
  $UPDATEAMOUNT="UPDATE `invoice` SET `TotalAmount`='$TAMOUNT' WHERE `invoice_no`='$I_NO'";
  $queryAMT=mysqli_query($con,$UPDATEAMOUNT);
  

$tellcustomertype="select `customer_type` from `invoice` WHERE `invoice_no`='$I_NO'";
$telltype=mysqli_query($con,$tellcustomertype);   
while ($typ=mysqli_fetch_array($telltype)) {

  $TYP= $typ['customer_type'];
} 

echo $TYP;

if($TYP=="Recievable"){

  $updateTransaction="UPDATE `tranction` SET `Credit`='$TAMOUNT' WHERE `voucher`='$I_NO'";
  $queryTransaction=mysqli_query($con,$updateTransaction) or die(mysqli_error($con));  

}
  else
  {
    $updateTransaction="UPDATE `tranction` SET `Debit`='$TAMOUNT' WHERE `voucher`='$I_NO'";
    $queryTransaction=mysqli_query($con,$updateTransaction) or die(mysqli_error($con));  

  }

}

// header('location:manageinvoice.php');


}
return "updated";
}
?>