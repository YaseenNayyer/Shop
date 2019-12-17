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

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
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

</div>

<!-- <button type="button" class="btn btn-outline-primary">Logout</button> -->

</div>
<!-- <h1 style="margin-left: 45%; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: white; margin-top: 10px;">ZA Fabrics</h1>
 -->
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

<div class="container-fluid">


<div class="row">
<div class="col-md-8">





    <div class="container">
    <div>
    
    <!-- <button><a href="logout.php" class="btn btn-dan">Logout</a></button> -->
    <!-- <h2>All Records</h2> -->
    <div id="records_Contant"></div>
    </div>
        <h2> Add Customer </h2>
        <!-- ========================================================================================== -->
        
<!-- ============================================================================================================= -->
<form method="post">
<!-- Material form login -->
<div class="card" style="width: 50%;   margin-left: 25%;" >

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Add Customer
</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    
      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormEmail" class="form-control" name="customer_name">
        <label for="materialLoginFormEmail">Customer Name</label>
      </div>
      <div class="md-form">
        <h4>Customer Type:</h4>
      <input type="radio" name="customer_type" value="Recievable">Recievable
      <br>
      <input type="radio" name="customer_type" value="Payable">Payable
      </div>
      <!-- Password -->
      <div class="md-form">
        <input type="text" id="materialLoginFormPassword" class="form-control" name="customer_no">
        <label for="materialLoginFormPassword">Contact No</label>
      </div>

     
      <!-- Sign in button -->
  
<input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"/>
   

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
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

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/js/dashborad1.js"></script>




<script type="text/javascript">


    function readRecords()
    {


        var readrecord="readrecord";
          $.ajax({
            url:"index-2.php";
            type:"post",
             data:{readrecord:readrecord}, 

              success:function(data,status)
              {

                $('#records_Contant').html(data);
              }

          });

    }



  	function addRecord(){
  		var customer_name =$('#customer_name').val();
  		var customer_type =$('#customer_type').val();
  		var customer_no= $('#customer_no').val();
  		

  		$.ajax({
  			url:"index-2.php",
  			type:"post",
        
  			data: {customer_name:customer_name,
  				customer_type : customer_type,
  				customer_no: customer_no
        },			
  	

  			 success:function(data,status){
  			 	readRecords();
  			 }

  		});
  	}	
  </script>



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>











</body>






</html>


  










<?php



if(isset($_POST['customer_name']) && isset($_POST['customer_type']) && isset($_POST['customer_no']) && isset($_POST['customer_balance']))
{
$customer_name=$_POST['customer_name'];
$customer_type=$_POST['customer_type'];
$customer_no=$_POST['customer_no'];
$customer_balance=$_POST['customer_balance'];

$check_duplicate_username="select `customer_name`, `customer_type` from `customer` where `customer_name`='$customer_name' and `customer_type`='$customer_type'";

$r=mysqli_query($con,$check_duplicate_username);
$count=mysqli_num_rows($r);
if($customer_name=="" or $customer_type=="" or $customer_no=="" or $customer_balance=="")
{


echo "<script>alert('Please fill all the fields')</script>";

}
elseif($count>0)
{
echo"<script>alert('Data exists')</script>";
  
}
else
{



$insert_customer="INSERT INTO `customer`(`customer_name`,`customer_type`,`customer_contact`,`balance`) VALUES ('$customer_name','$customer_type','$customer_no','$customer_balance')";


    $run_customer=mysqli_query($con,$insert_customer);
    if($run_customer)
    {
echo"<script>alert('customer inserted successfully');</script>";
}

    else

    {
echo"<script>alert('not inserted successfully');</script>";

    }


}
}
?>