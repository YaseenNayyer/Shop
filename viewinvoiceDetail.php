<?php
include("db.php");

$id=$_GET['invoice_no'];

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

<a href="index-2.php">-Add </a>
</li>
<li><span class="badge badge-primary badge-pro float-right"></span>
<a href=index-3.php>-Manage</a>
</li>
</ul>
</li>
<li class="nav-item dropdown open">
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
<li class="active">
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

  <table class="table table-striped table-hover table-bordered">
      <tr class="bg-dark  text-white  text-center">
         <th>No</th>
         
         <th>Description</th>
         <th>Quantity</th>
         <th>Rate</th>

         <th>Amount</th>
         
         <th>Delete</th>
         <th>Update</th>
      </tr>
      <?php
$sql1="SELECT * FROM `invoicedetail` WHERE invoice_no='$id'";
$result1=mysqli_query($con,$sql1);
 $number_of_results=mysqli_num_rows($result1);

 
 



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

$sql="SELECT * FROM `invoicedetail` WHERE invoice_no='$id'  Limit $this_page_first_result,$result_per_page";


$result=mysqli_query($con,$sql);

while ($res=mysqli_fetch_array($result)) {
  global $x;
$x=$x+1;
  ?>

    <tr class="text-center">
    <th><?php echo $x; ?></th> 
    
    <th><?php echo $res['Description']; ?></th> 
    <th><?php echo $res['qty']; ?></th>        
      <th><?php echo $res['rate']; ?></th>        
      <th><?php  echo $res['Amount'];?></th>
      
      
      <th><button class="btn-danger btn"><a class="delete_link" href="deleteinvoice.php?invoice_no=<?php echo $res['invoice_no']; ?> " style="color:white;"  class="text-white">Delete</a></button></th>
      <th><button class="btn-success btn" ><a href="updateinvoice.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></th>


  </tr>

<script>

$(".delete_link").click(function(){


return confirm("Are you sure you want to delete this item");
});


</script>

<?php

}
for($page=1;$page<=$number_of_pages;$page++)
{
  
  echo '<a href="manageinvoice.php?page='.$page.'">' .$page. '</a>';
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


