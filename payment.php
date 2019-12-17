
<?php
include("db.php");
 

session_start();






if(!isset($_SESSION['username']))
{header('location:index.php');}



$result_per_page=3;


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

<script>
         $(function () {
      $('#BankName').keydown(function (e) {
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
    




$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;    
    $('#date').attr('max', maxDate);
});
</script>



<script>
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    
    $('#drawdate').attr('min', maxDate);
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


</div>
<!-- <h1 style="margin-left: 45%; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: white; margin-top: 10px;">ZA Fabrics</h1> -->

</div>
<div class="side-nav expand-lg">
<div class="side-nav-inner">
<ul class="side-nav-menu">
<li class="side-nav-header">

</li>
<li class="nav-item dropdown ">
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
<li class="">
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

<li class="nav-item dropdown">
<a class="dropdown-toggle" href="#">
<span class="icon-holder">
<i class="lni-layers"></i>
</span>
<span class="title">LogOut</span>
<span class="arrow">

</span>
</a>



</ul>
</li>



</div>
</div>


<div class="page-container">

<div class="main-content">

<div class="container">


<div class="row container">
<div class="col-md-8">



  

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Customer Type</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
      
    </div>

  </div>
</div>






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
      <label for="pwd">Payment Type:</label>
      <input type="text" class="form-control" id="paymenttype"  name="paymenttype">
    </div>
    
    <div class="form-group">
      <label for="pwd">Bank Name</label>
      <input type="text" class="form-control" id="BankName"  name="BankName" maxlength="30">
    </div>
     

    <div class="form-group">
      <label for="pwd">Cheque_no</label>
      <input type="text" class="form-control" id="Chequeno" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="30" name="Chequeno">
    </div>
    
    <div class="form-group">
      <label >DrawDate</label>
      <input type="date" class="form-control" id="drawdate"  name="drawdate">
    </div>
    
    <div class="form-group">
      <label >Amount:</label>
      <input type="text" class="form-control" id="Amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="30" name="Amount">
    </div>


    
    <input type="submit" class="btn btn-default" name="submit"/>
    <th><button class="btn-success btn text-white" id="a" ><a href="paymentpdf.php" >Generate Pdf</a></button></th>
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





// echo "<script>alert('Please fill all the fields')</script>";



                                                                                               
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
  $insert_transaction="INSERT INTO `tranction`(`customer_id`,`Date`,`description`,`Credit`,`voucher`) VALUES ('$RES','$date','payment$PAY','$Amount','$PAY')";
  
  $run_transaction=mysqli_query($con,$insert_transaction) or die(mysqli_error($con));  
}
else

{

  $insert_transaction="INSERT INTO `tranction`(`customer_id`,`Date`,`description`,`Debit`,`voucher`) VALUES ('$RES','$date','payment$PAY','$Amount','$PAY')";
  
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



$querucust="select `customer_id` from  `customer` where `customer_name`='$customer_Name' and `customer_type`='$Customer_Type'";
$runquerucust=mysqli_query($con,$querucust);

while ($res33=mysqli_fetch_array($runquerucust)) {

  $customer_id= $res33['customer_id'];


} 

if($Customer_Type=="Recievable")
{
  $addbal="UPDATE `customer` SET `balance`=(SELECT `balance` where `customer_id`='$customer_id' )-'$Amount' where `customer_id`='$customer_id'";
  $run_addbal=mysqli_query($con,$addbal) or die(mysqli_error($con));
}

else
{
  $addbal="UPDATE `customer` SET `balance`=(SELECT `balance` where `customer_id`='$customer_id' )+'$Amount' where `customer_id`='$customer_id'";
  $run_addbal=mysqli_query($con,$addbal) or die(mysqli_error($con));


}

 }

?>







