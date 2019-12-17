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




<li class="list-item">

<div class="media-img">
<div class="icon-avatar bg-info">

</div>
</div>

<!-- <button type="button" class="btn btn-outline-primary">Logout</button> -->

</div>
<h1 style="margin-left: 45%; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: white; margin-top: 10px;">ZA Fabrics</h1>

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
<!-- <button><a href="logout.php" class="btn btn-dan">Logout</a></button> -->

<div class="row">
<div class="col-md-12">
  
  <div class="container">
    <h2 style= "text-align:center; font-weight:900;">Customers</h2><br/>
    <table class="table table-striped table-hover table-bordered">
      <tr class="bg-dark  text-white  text-center">
          <th>#</th>        
          <th>Customer Name</th>
          <th>Customer type</th>
          <th>Customer Contact</th>
          <th>Balance</th>
          <th>Delete</th>
          <th>Update</th>
<!-- 
          <li class="search-box">
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
</li> -->
      </tr>
      <?php
$sql1="SELECT * FROM `customer`";
$result1=mysqli_query($con,$sql1);
 $number_of_results=mysqli_num_rows($result1);

 
// while ($res=mysqli_fetch_array($result)) {
  

      ?>

        <!-- <tr class="text-center">
          <th><?php echo $res['customer_id']; ?></th>        
          <th><?php  echo $res['customer_name'];?></th>
          <th><?php echo $res['customer_type'];?></th>
          <th><?php echo $res['customer_contact'];?></th>
          <th><?php echo $res['balance'];?></th>
          <th><button class="btn-danger btn"><a class="delete_link" href="delete.php?customer_id=<?php echo $res['customer_id']; ?> " style="color:white;"  class="text-white">Delete</a></button></th>
          <th><button class="btn-success btn" "><a href="update.php?customer_id=<?php echo $res['customer_id']; ?>" class="text-white">Update</a></button></th>


      </tr>

<script>
  
$(".delete_link").click(function(){
  

  return confirm("Are you sure you want to delete this item");
});


</script> -->
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

$sql="SELECT * FROM `customer`  Limit $this_page_first_result,$result_per_page";


$result=mysqli_query($con,$sql);

while ($res=mysqli_fetch_array($result)) {
  

  ?>

    <tr class="text-center">
      <th><?php echo $res['customer_id']; ?></th>        
      <th><?php  echo $res['customer_name'];?></th>
      <th><?php echo $res['customer_type'];?></th>
      <th><?php echo $res['customer_contact'];?></th>
      <th><?php echo $res['balance'];?></th>
      <!-- <th><a href="#"  did="<?php echo $res['customer_id']; ?>" class="btn btn-danger btn-sm del_cust">Delete</a></th> -->
       <th><button class="btn-danger btn"><a class="delete_link" href="delete.php?customer_id=<?php echo $res['customer_id']; ?> " style="color:white;"  class="text-white">Delete</a></button></th> 
      <th><button class="btn-success btn text-white" id="a" ><a href="update.php?customer_id=<?php echo $res['customer_id']; ?>" style="color:white;">Update</a></button></th>


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
  


   <a href="index-3.php?page='.($page-1).'">Previous</a>





  
  
     </div>';

 }


for($i=1;$i<=$number_of_pages;$i++)
{
/*   echo '<div class="pagination">
  


  <a href="index-3.php?page='.$i.'">'.$i.'</a>





  
  
   </div>';
 */
 
}

if($i>$page)
 {
  /*  echo '<div class="pagination">
  


   <a href="index-3.php?page='.($page+1).'">Next</a>





  
  
     </div>'; */

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



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>


</html>


