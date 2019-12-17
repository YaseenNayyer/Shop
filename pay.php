
<?php
include("db.php");



session_start();

$name=$_SESSION['username'];

if(!isset($_SESSION['username']))
{header('location:index.php');}

?>




<!DOCTYPE html>
<html>


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
</head>
<body>
<div class="app header-default side-nav-dark">
<div class="layout">

<div class="header navbar" style="background-color: #3F729B;">
<div class="header-container">
<div class="nav-logo">
<a href="index-2.html">
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
<a href="dashboard.php">-Add </a>
</li>
<li><span class="badge badge-primary badge-pro float-right"></span>
<a href=mange_cust.php>-Manage</a>
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
<a href="#">-Manage</a>
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
<a href="#">-Add</a>
</li>
<li>
<a href="#">-Manage</a>
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



  ===================================================================================

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Customer Type</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        
<form method="post">

<select id="mySelect" name="customertype" onchange="myFunction()">
<option>Select Customer Type</option>
  <option value="Recievable">Recievable</option>
  <option value="Payable">Payable</option>
  
</select>
<input type="Submit" name="Submit" value="Submit" class="btn btn-primary">
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
=================================================================================== 





<?php


if(isset($_POST['Submit']))
{
  global $type;
  $type=$_POST['customertype'];
  
$query="SELECT `customer_name` FROM `customer` WHERE `customer_type`='$type'";
$result=mysqli_query($con,$query);


}

global $type1;
if(!empty($type))
$type1=$type;
 
 
?>
<form class="form-group" method="post" id="MyForm">

<select class="form-control"  name="customername" id="customername">
   
<?php
while($row=mysqli_fetch_array($result)){
   
   $c_id=$row['customer_id'];
   
   ?>
    
   <option ><a href="invoice.php?Customerid=$c_id"><?php echo $row[0]; ?></a> </option>

   <?php
   
 } 
  ?>
</select>


<div class="container">
  <h2>Payment</h2>
  
  <div class="form-group">
      <label for="email">CustomerType:</label>
      <input type="text" class="form-control" id="email" value="<?php echo $type1; ?>" name="CustomerType">
    </div>
    
    
    <div class="form-group">
      <label for="email">Date:</label>
      <input type="date" class="form-control" id="date"  name="date">
    </div>
    
    
    <div class="form-group">
      <label for="pwd">PaymentType:</label>
      <input type="text" class="form-control" id="paymenttype"  name="paymenttype">
    </div>
    
    <div class="form-group">
      <label for="pwd">BankName</label>
      <input type="text" class="form-control" id="BankName"  name="BankName">
    </div>
     

    <div class="form-group">
      <label for="pwd">Cheque_no</label>
      <input type="text" class="form-control" id="Chequeno"  name="Chequeno">
    </div>
    
    <div class="form-group">
      <label >DrawDate</label>
      <input type="date" class="form-control" id="drawdate"  name="drawdate">
    </div>
    
    <div class="form-group">
      <label >Amount:</label>
      <input type="text" class="form-control" id="Amount"  name="Amount">
    </div>


    
    <input type="submit" class="btn btn-default" name="submit"/>
  </form>
  </div>

</div>

</div>
</div>


<footer class="content-footer">
<div class="footer">
<div class="copyright">
<span>Copyright © 2019 <b class="text-dark"><a href="http://geekshouse.net/" target="_blankk" class="text-gray">GEEKS HOUSE</a></b>. All Right Reserved</span>
<span class="go-right">
<a href="#" class="text-gray">Term &amp; Conditions</a>
<a href="#" class="text-gray">Privacy &amp; Policy</a>
</span>
</div>
</div>
</footer>

</div>

</div>
</div>



<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/js/dashborad1.js"></script>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
}
</script>

<script>
$(document).ready(function(){

$("#MyForm").on("submit",function () {
			if ($("#paymenttype").val()=="") {
				$("#paymenttype").addClass("border-danger");
        $("#cat_error").html("<span class ='text-danger'>Please Enter customer Type</span>");
        
        $("#BankName").addClass("border-danger");
				$("#BankName").html("<span class ='text-danger'>Please Enter previous balance</span>");
        
        $("#Chequeno").addClass("border-danger");
				$("#num_error").html("<span class ='text-danger'>Please Enter current Balance</span>");

       
        $("#drawdate").addClass("border-danger");
				$("#num_error").html("<span class ='text-danger'>Please Enter quantity</span>");
        $("#Amount").addClass("border-danger");
				$("#num_error").html("<span class ='text-danger'>Please Enter amount</span>");
      
      
      
      
      
      
      
      }
			else{
				$.ajax({
					url : "payment.php",
					method : "POST",
					data : $("#MyForm").serialize(),
					success : function(data){
           // alert(data);
            //console.log(data);
						if (data=="added") { }
              alert("payment Added");
						$("#paymenttype").removeClass("border-danger");
						$("#paymenttype").html("<span class ='text-success'>Customer Added</span>");
           
            $("#BankName").removeClass("border-danger");
            $("#BankName").html("<span class ='text-success'>Customer Number  Added</span>");
            
            $("#Chequeno").removeClass("border-danger");
            $("#Chequeno").html("<span class ='text-success'>Customer Number  Added</span>");


            
            $("#drawdate").removeClass("border-danger");
            $("#drawdate").html("<span class ='text-success'>Customer Number  Added</span>"); 


            $("#Amount").removeClass("border-danger");
            $("#Amount").html("<span class ='text-success'>Customer Number  Added</span>");
            
            
            $("#paymenttype").val("");
            $("#BankName").val("");
            $("#Chequeno").val("");
            $("#drawdate").val("");
            
            $("#Amount").val("");
						
          
					}

				})

			}
		})

  })
</script>
  

</body>


</html>



<?php

if(isset($_POST['submit']))
{

$customer_Name=$_POST['customername'];
$Customer_Type=$_POST['CustomerType'];    
$date=$_POST['date'];
$paymenttype=$_POST['paymenttype'];
$BankName=$_POST['BankName'];
$Chequeno=$_POST['Chequeno'];
$drawdate=$_POST['drawdate'];
$Amount=$_POST['Amount'];



$query1="select `customer_id` from `customer` where `customer_name`='$customer_Name' AND `customer_type`='$Customer_Type'";
$result=mysqli_query($con,$query1);  

while ($res=mysqli_fetch_array($result)) {


  $RES= $res['customer_id'];

    echo $RES;
}



if($customer_Name=="" or $Customer_Type=="" or $date=="" or $paymenttype=="" or $BankName=="" or $Chequeno=="" or $drawdate=="" or $Amount=="" )
{


// echo "<script>alert('Please fill all the fields')</script>";

}

else

{   
$insert_payment="insert into `payment`(`customer_id`,`customer_name`,`customer_type`,`Date`,`paymenttype`,`Bankname`,`Cheque_no`,`drawdate`,`Amount`) VALUES ('$RES','$customer_Name','$Customer_Type','$date','$paymenttype','$BankName','$Chequeno','$drawdate','$Amount')";
    
$run_payment=mysqli_query($con,$insert_payment) or die(mysqli_error($con));   


$select_paymentid="select `payment_id` FROM `payment` WHERE `customer_id`='$RES' AND `customer_name`='$customer_Name' AND `customer_type`='$Customer_Type' AND `Date`='$date' AND `paymenttype`='$paymenttype' AND `Bankname`='$BankName' AND`Cheque_no`='$Chequeno' AND `drawdate`='$drawdate' AND `Amount`='$Amount'";

$resultPay=mysqli_query($con,$select_paymentid);
while ($pay=mysqli_fetch_array($resultPay)) {
  
    
  $PAY=$pay['payment_id'];

  echo $PAY;
}




if($Customer_Type=="Recievable")
{
  $insert_transaction="INSERT INTO `tranction`(`customer_id`, `Date`, `description`, `Debit`,`voucher`) VALUES ('$RES','$date','payment.$PAY','$Amount','$PAY')";
  
  $run_transaction=mysqli_query($con,$insert_transaction) or die(mysqli_error($con));  
}
else

{
  $insert_transaction="INSERT INTO `tranction`(`customer_id`, `Date`, `description`, `Credit`,`voucher`) VALUES ('$RES','$date','payment.$PAY','$Amount','$PAY')";
  $run_transaction=mysqli_query($con,$insert_transaction) or die(mysqli_error($con));  

}

    if($run_payment)
    {
// echo"<script>alert('Payment done successfully');</script>";


    }

    else

    {
echo"<script>alert('error');</script>";

    }


}
 }

?>







