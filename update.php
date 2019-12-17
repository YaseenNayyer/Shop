
<?php
$id=$_GET['customer_id'];



session_start();



if(!isset($_SESSION['username']))
{header('location:index.php');}




include_once("db.php");
$q="SELECT * FROM customer WHERE customer_id='$id'";
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
  <h1>Update Data</h1>

  <?php
while ($row=mysqli_fetch_array($result)){
  
  ?>
  <form id="MyForm" method="post">
    <div class="form-group">
      <label >CustomerName:</label>
      <input type="text" class="form-control" id="customer_name"  name="customer_name" value="<?php echo $row['customer_name']; ?>">
      <small id="name_error" class="form-text text-muted"></small>
    
    </div>
    <script>
         $(function () {
      $('#customer_name').keydown(function (e) {
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


    <div class="form-group">
                    <label for="sel1">Customer Type:</label>
                    <select class="form-control" id="customer_type" style="width: auto;" name="customer_type">
                 
                    	<option><?php echo $row['customer_type'];  ?></option>
                      <option><?PHP 
	                      	if($row['customer_type']=='Payable')
	                      	{


	                      		echo "Recievable";


	                      	}

	                      	else
	                      	{


	                      		echo "Payable";
	                      	}




                         ?></option>
                      
                 
                    </select>
                  </div>


    <div class="form-group">
      <label >Customer Contact</label>
      <input type="text" class="form-control" id="customer_contact"  name="customer_contact" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" value="<?php echo $row['customer_contact']; ?>">
      <small id="contact_error" class="form-text text-muted"></small>         
    </div>

<div class="form-group">
      <label >Balance</label>
      <input type="text" class="form-control" id="pwd"  name="customer_balance" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" value="<?php echo $row['balance']; ?>">
    </div>
	
    
    
    <input type="submit" name="Submit">
  </form>
</div>
<?php
}
?>
</body>
</html>






          
      </div>
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



















</body>






</html>


  
<?php

if(isset($_POST['Submit']))
{
$id=$_GET['customer_id'];

$customer_name=$_POST['customer_name'];

$customer_type=$_POST['customer_type'];






$customer_contact=$_POST['customer_contact'];
$customer_balance=$_POST['customer_balance'];

$check_duplicate_username="select `customer_name`, `customer_type` from `customer` where `customer_name`='$customer_name' and `customer_type`='$customer_type'";
  $r=mysqli_query($con,$check_duplicate_username);
$count=mysqli_num_rows($r);

if($customer_name=="" or $customer_type=="" or $customer_contact=="" or $customer_balance=="")
{


// echo "<script>alert('Please fill all the fields')</script>";

}

elseif($count>0)
{

  
}

else{
  
$q="UPDATE customer SET customer_id='$id',customer_name='$customer_name',customer_type='$customer_type',customer_contact='$customer_contact',balance='$customer_balance' WHERE customer_id='$id'";


$query=mysqli_query($con,$q);
//header('location:index-3.php');


}
}
?>








