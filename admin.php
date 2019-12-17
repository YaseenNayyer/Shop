
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

      /* Google font */
@import url('https://fonts.googleapis.com/css?family=Orbitron');

/* body {
  background-color: #121212;
} */

#clock {
  font-family: 'Orbitron', sans-serif;
  color: black;
  font-size: 80px;
  text-align: center;
  padding-top: 40px;
  padding-bottom: 40px;
  margin-left: -10%;
  margin-top: 150px;
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
<!-- <button style="margin-top:20%;"   class="btn btn-light"  aria-pressed="false" autocomplete="off">
<a href="logout.php" >Logout</a>
</button> -->
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
<!-- <span class="icon-holder">
<i class="lni-layers"></i>
</span> -->
<span class="title"><span class="title"><a href="logout.php" >Logout</a></span></span>
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


<?php 
 
 if($name=='admin')
 {
 ?>
<h1 style=" text-align: center;margin-left: -20%;"><i> Admin</h1>
<?php    }  

if($name=='user')
 {
 ?>
<h1 style=" text-align: center;margin-left: -20%;"><i>User</h1>
<?php    }  ?>


<div class="row container">
<div class="col-sm-12">

  <div id="clock"></div>

  
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

<script>
function currentTime() {
  var date = new Date(); /* creating object of Date class */
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  var midday = "AM";
  midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
  hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); /* assigning hour in 12-hour format */
  hour = updateTime(hour);
  min = updateTime(min);
  sec = updateTime(sec);
  document.getElementById("clock").innerText = hour + " : " + min + " : " + sec + " " + midday; /* adding time to the div */
    var t = setTimeout(currentTime, 1000); /* setting timer */
}

function updateTime(k) { /* appending 0 before time elements if less than 10 */
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}

currentTime();
</script>
<script>
      function check(value) {
        console.log("Value", value);
      }

      function subTotal(value) {
        var list = value.parentNode.parentNode.getAttribute("id");
        console.log("List", list);
        /*  var list1 = document.getElementById(list).childNodes[5].childNodes[0]
          .value; */
        var list1 = document.getElementById(list).getElementsByTagName("TD")[2]
          .childNodes[1].value;
        //var list2 = document.getElementById(list).childNodes[5].childNodes[0];
        var amount = value.value;
        var result = parseInt(amount) * parseInt(list1);
        console.log(list1);
        //var list = document.getElementById(value).innerText;
        //console.log(list);
        // console.log(list1);\
        /*  var show = document.getElementById(list).getElementsByTagName("TD")[4]
          .childNodes[0]; */
        var show = document
          .getElementById(list)
          .getElementsByTagName("TD")[4]
          .getElementsByTagName("input")[0];
        show.value = result;
        // console.log(list2);
        console.log("Show ", show);
        console.log(result);
      }
    </script>
    <script>
      $(".add-row").click(function() {
        var $last = document
          .getElementById("myList")
          .lastElementChild.getAttribute("id");
        //console.log($last);
        var id_val = parseInt($last);
        var value_add = id_val + 1;

        if ($last != undefined || $last != null) {
          var markup =
            "<tr id=" +
            value_add +
            "><td id='tr_" +
            value_add +
            "'><input type='checkbox' name='record'></td><td> <input type='input' name='description[]' class='description' >" +
            "<td id='tr_" +
            value_add +
            "'> <input type='input' name='quantity[]' class='quantity' onblur='check(this)'>" +
            "<td id='tr_" +
            value_add +
            "'> <input type='input' name='amount[]' class='amount' onblur='subTotal(this)'>" +
            "<td id='tr_" +
            value_add +
            "'> <input type='input' name='sub_total[]' class='sub_total' ></tr>";
          $("table tbody").append(markup);
        }
      });
    </script>

</body>


</html>








