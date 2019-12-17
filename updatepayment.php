<?php



session_start();



if(!isset($_SESSION['username']))
{header('location:index.php');}



$id=$_GET['payment_id'];
include("db.php");

$q="SELECT * FROM payment WHERE payment_id='$id'";
$result=mysqli_query($con,$q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inspire - Admin and Dashboard Template</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<script type="text/javascript" src="./JS/script.js"></script>

<style type="text/css">
      form {
        margin: 20px 0;
      }
      form input,
      button {
        padding: 5px;
      }
      table {
        width: auto;
        margin-bottom: 20px;
        border-collapse: collapse;
      }
      table,
      th,
      td {
        border: 1px solid #cdcdcd;
      } 
      table th,
      table td {
        padding: 10px;
        text-align: left;
      }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        // Find and remove selected table rows
        $(".delete-row").click(function() {
          $("table tbody")
            .find('input[name="record"]')
            .each(function() {
              if ($(this).is(":checked")) {
                $(this)
                  .parents("tr")
                  .remove();
              }
            });
        });
      });
    </script>

<script>
         $(function () {
      $('#Bankname').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
            </script> 


<script>
         $(function () {
      $('#paymenttype').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
            </script> 



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
<!-- <ul class="nav-right">
<li class="search-box">
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
</li>
<li class="massages dropdown dropdown-animated scale-left">
<span class="counter">3</span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="lni-envelope"></i>
</a>
<ul class="dropdown-menu dropdown-lg">
<li>
<div class="dropdown-item align-self-center">
<h5><span class="badge badge-primary badge-pro float-right">745</span>Messages</h5>
</div>
</li>
<li>
<ul class="list-media">
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<img src="assets/img/users/avatar-1.jpg" alt="">
</div>
<div class="info">
<span class="title">
Amanda Robertson
</span>
<span class="sub-title">Dummy text of the printing and typesetting industry.</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<img src="assets/img/users/avatar-2.jpg" alt="">
</div>
<div class="info">
<span class="title">
Danny Donovan
</span>
<span class="sub-title">It is a long established fact that a reader will</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<img src="assets/img/users/avatar-3.jpg" alt="">
</div>
<div class="info">
<span class="title">
 Frank Handrics
</span>
<span class="sub-title">You have 87 unread messages</span>
</div>
</a>
</li>
</ul>
</li>
<li class="check-all text-center">
<span>
<a href="#" class="text-gray">View All</a>
</span>
</li>
</ul>
</li>
<li class="notifications dropdown dropdown-animated scale-left">
<span class="counter">2</span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="lni-alarm"></i>
</a>
<ul class="dropdown-menu dropdown-lg">
<li>
<h5 class="n-title text-center">
<i class="lni-alarm"></i>
<span>Notifications</span>
</h5>
</li>
<li>
<ul class="list-media">
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-primary">
<i class="lni-envelope"></i>
</div>
</div>
<div class="info">
<span class="title">
5 new messages
</span>
<span class="sub-title">4 min ago</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-success">
<i class="lni-comments-alt"></i>
</div>
</div>
<div class="info">
<span class="title">
4 new comments
</span>
<span class="sub-title">12 min ago</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-info">
<i class="lni-users"></i>
</div>
</div>
<div class="info">
<span class="title">
3 Friend Requests
</span>
<span class="sub-title">a day ago</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-purple">
<i class="lni-comments-alt"></i>
</div>
</div>
<div class="info">
<span class="title">
2 new messages
</span>
<span class="sub-title">12 min ago</span>
</div>
</a>
</li>
</ul>
</li>
<li class="check-all text-center">
<span>
<a href="#" class="text-gray">Check all notifications</a>
</span>
</li>
</ul>
</li>
<li class="user-profile dropdown dropdown-animated scale-left">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img class="profile-img img-fluid" src="assets/img/avatar/avatar.jpg" alt="">
</a>
<ul class="dropdown-menu dropdown-md">
<li>
<ul class="list-media">
<li class="list-item avatar-info">
<div class="media-img">
<img src="assets/img/avatar/avatar.jpg" alt="">
</div>
<div class="info">
<span class="title text-semibold">Tomas Murray</span>
<span class="sub-title">UI/UX Desinger</span>
</div>
</li>
</ul>
</li>
<li role="separator" class="divider"></li>
<li>
<a href="#">
<i class="lni-cog"></i>
<span>Setting</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-user"></i>
<span>Profile</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-envelope"></i>
<span>Inbox</span>
<span class="badge badge-pill badge-primary badge-pro pull-right">2</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-lock"></i>
<span>Logout</span>
</a>
</li>
</ul>
</li>
</ul> -->

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

<div class="container">


<div class="row container">
<div class="col-md-8">





<h1>Update Payment</h1>
<?php
while ($row=mysqli_fetch_array($result)){
	

  ?>
  <form id="MyForm" method="post">
  
  <div class="form-group">
  <label >paymentType</label>
      <input type="text" class="form-control" id="paymenttype"  name="paymenttype" maxlength="10" value="<?php echo $row['paymenttype']; ?>">
    
      <small id="payment_error" class="form-text text-muted"></small>
    </div>  

    <div class="form-group">
      <label >Date:</label>
      <input type="date" class="form-control" id="date"  name="date" value="<?php echo $row['Date']; ?>">
      <small id="date_error" class="form-text text-muted"></small>
    </div>


  <div class="form-group">
      <label >bankName</label>
      <input type="text" class="form-control" id="Bankname"  name="Bankname" maxlength="20" value="<?php echo $row['Bankname']; ?>">
      <small id="Bankname_error" class="form-text text-muted"></small>
    </div>
  
  
  
  
  <div class="form-group">
      <label >Cheque_no:</label>
      <input type="text" class="form-control" id="Cheque_no"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="30" name="Cheque_no" value="<?php echo $row['Cheque_no']; ?>">
      <small id="Cheque_no_error" class="form-text text-muted"></small>
    </div>
    
    <div class="form-group">
      <label >DrawDate:</label>
      <input type="date" class="form-control" id="drawdate"  name="drawdate" value="<?php echo $row['drawdate']; ?>">
      <small id="drawdate_error" class="form-text text-muted"></small>
    </div>
    

    <div class="form-group">
      <label >Amount</label>
      <input type="text" class="form-control" id="Amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10"  name="Amount" value="<?php echo $row['Amount']; ?>">
      <small id="Amount_error" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
      <label ></label>
      <input type="hidden" class="form-control" id="customer_type"  name="customer_type" value="<?php echo $row['customer_type']; ?>">
      
    </div>
	
    
    
    <input type="submit" name="submit">
  </form>
</div>
<?php
}
?>
</body>
</html>


<script>
$(document).ready(function(){

$("#MyForm").on("submit",function (){
			if ($("#paymenttype").val()==""  ) {
        $("#paymenttype").addClass("border-danger");
				$("#payment_error").html("<span class ='text-danger'>Please Enter DISCRIPTION</span>");
      }
      else if($("#date").val()=="" ){
        $("#date").addClass("border-danger");
				$("#date_error").html("<span class ='text-danger'>Please Enter quantity</span>");
      }
       
 else if($("#Bankname").val()==""){
  $("#Bankname").addClass("border-danger");
				$("#Bankname_error").html("<span class ='text-danger'>Please Enter amount</span>");
      
      }

      else if($("#Cheque_no").val()==""){
  $("#Cheque_no").addClass("border-danger");
				$("#Cheque_no_error").html("<span class ='text-danger'>Please Enter amount</span>");
      
      }
      else if($("#drawdate").val()==""){
  $("#drawdate").addClass("border-danger");
				$("#drawdate_error").html("<span class ='text-danger'>Please Enter amount</span>");
      
      }
      else if($("#Amount").val()==""){
  $("#Amount").addClass("border-danger");
				$("#Amount").html("<span class ='text-danger'>Please Enter amount</span>");
      
      }

else{
				$.ajax({
					url : "updatepayment.php",
					method : "POST",
					data : $("#MyForm").serialize(),
					success : function(data){
            
         
            if(data==data){
              alert("Updated");
           window.location.href="";
              $("#paymenttype").removeClass("border-danger");
            $("#payment_error").html("<span class ='text-success'>Update</span>");
            $("#date").removeClass("border-danger");
            $("#date_error").html("<span class ='text-success'>Update</span>");
            $("#Bankname").removeClass("border-danger");
            $("#Bankname_error").html("<span class ='text-success'>Update</span>");
            $("#Cheque_no").removeClass("border-danger");
            $("#Cheque_no_error").html("<span class ='text-success'>Update</span>");
            $("#drawdate").removeClass("border-danger");
            $("#drawdate_error").html("<span class ='text-success'>Update</span>");
            $("#Amount").removeClass("border-danger");
            $("#Amount_error").html("<span class ='text-success'>Update</span>");
          
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
$id=$_GET['payment_id'];
$paymenttype=$_POST['paymenttype'];
$date=$_POST['date'];
$Bankname=$_POST['Bankname'];
$Cheque_no=$_POST['Cheque_no'];
$drawdate=$_POST['drawdate'];
$C_type=$_POST['customer_type'];

$Amount=$_POST['Amount'];







if($paymenttype=="" or $date="" or $Bankname=="" or $Cheque_no=="" or $drawdate=="" or $Amount=="")
{


// echo "<script>alert('Please fill all the fields')</script>";

}
else{

$q="UPDATE `payment` SET `paymenttype`='$paymenttype',`Date`='$date',`Bankname`='$Bankname',`Cheque_no`='$Cheque_no',`drawdate`='$drawdate',`Amount`='$Amount' WHERE `payment_id`='$id'";
$q1="UPDATE `tranction` SET `Date`='',`description`='',`Debit`='',`Credit`='',`voucher`='' WHERE 1";


$query=mysqli_query($con,$q);
if($q==0)
{
  // $am="SELECT SUM(`Amount`) AS `TA` from  `invoicedetail` where `invoice_no`='$I_NO'";
  // $result2=mysqli_query($con,$am);      
  // while($data=mysqli_fetch_array($result2)) {
  // $TAMOUNT=$data['TA']; 
  // echo $TAMOUNT;
  // }
  // $UPDATEAMOUNT="UPDATE `invoice` SET `TotalAmount`='$TAMOUNT' WHERE `invoice_no`='$I_NO'";
  // $queryAMT=mysqli_query($con,$UPDATEAMOUNT);

  if($C_type=="Recievable")
  {
    $updateTransaction="UPDATE `tranction` SET `Debit`='$Amount' WHERE `voucher`='$id'";
    
    $run_transaction=mysqli_query($con,$updateTransaction) or die(mysqli_error($con));  
  }
  else
  
  {
    $updateTransaction="UPDATE `tranction` SET `Credit`='$Amount' WHERE `voucher`='$id'";
    $run_transaction=mysqli_query($con,$updateTransaction) or die(mysqli_error($con));  
  
  }
  


}

header('location:viewpaymnet.php');


}
}
?>