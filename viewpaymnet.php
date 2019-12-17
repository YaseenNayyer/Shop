 <?php
include("db.php");



session_start();



if(!isset($_SESSION['username']))
{header('location:index.php');}

 $result_per_page=10;

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

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>

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
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
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
<div class="container-fluid">

<div class="row">
<div class="col-md-8">
  <div class="container">
    <h2>Customer Table</h2>
    <table class="table table-striped table-hover table-bordered">
      <tr class="bg-dark  text-white  text-center">
           <th>Name</th>     
          <th>Date</th>
          <th>PaymentType</th>
          <th>bankName</th>
          <th>Cheque_No</th>
          <th>draw_date</th>
          <th>amount</th>
            <th>Update</th>
            <th>delete</th>
            <th>print</th>
      </tr>
      <?php
$sql1="SELECT * FROM `payment`";
$result1=mysqli_query($con,$sql1);
 $number_of_results=mysqli_num_rows($result1);

 

  

      ?>

     
<?php



 $number_of_pages=ceil($number_of_results/$result_per_page);
if(!isset($_GET['page']))
{

$page=1;

}
else
{

$page=$_GET['page'];

}



$this_page_first_result=($page-1)*$result_per_page;

$sql="SELECT * FROM `payment` Limit $this_page_first_result,$result_per_page";


$result=mysqli_query($con,$sql);

while ($res=mysqli_fetch_array($result)) {
  

  ?>

    <tr class="text-center">
    <th><?php echo $res['customer_name']; ?></th>    
      <th><?php echo $res['Date']; ?></th>        
      
      <th><?php echo $res['paymenttype'];?></th>
      <th><?php echo $res['Bankname'];?></th>
      <th><?php echo $res['Cheque_no'];?></th>
      <th><?php echo $res['drawdate'];?></th>
      <th><?php echo $res['Amount'];?></th>


      <th><button class="btn-danger btn"><a class="delete_link" href="deletepayment.php?payment_id=<?php echo $res['payment_id']; ?> " style="color:white;"  class="text-white">Delete</a></button></th>
      <th><button class="btn-success btn" ><a href="updatepayment.php?payment_id=<?php echo $res['payment_id']; ?>" class="text-white">Update</a></button></th>
      <th><button class="btn-success btn" ><a href="atledger.php?payment_id=<?php echo $res['payment_id']; ?>" class="text-white">Print</a></button></th>

  </tr>

  <script type="text/javascript">
    $('.delete_link').click(function(e){
        var result = confirm("Are you sure you want to delete this user?");
        if(!result) {
            e.preventDefault();
        }
    });
</script>



<?php

}
if($page>1)
 {
   echo '<div class="pagination">
  


   <a href="viewpaymnet.php?page='.($page-1).'">Previous</a>





  
  
     </div>';

 }

for($i=1;$i<=$number_of_pages;$i++)
{
  
  echo '<div class="pagination">
  


  <a href="viewpaymnet.php?page='.$i.'">'.$i.'</a>





  
  
   </div>';
}

if($i>$page)
 {
   echo '<div class="pagination">
  


   <a href="viewpaymnet.php?page='.($page+1).'">Next</a>





  
  
     </div>';

 }


?>

    </table>
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


