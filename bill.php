
<?php
include("db.php");


 

session_start();



if(!isset($_SESSION['username']))
{
  
  
  header('location:index.php');
}

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

   $(document).ready(function(){

$("#Submit").click(function(){
  $("#target").hide(); 
    $("#target").show();
    exit();
  });

});
</script> 

<script>
         $(function () {
      $('#description').keydown(function (e) {
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



<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
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
<!-- <button><a href="logout.php" class="btn btn-dan">Logout</a></button> -->



<div class="row">
<div class="col-md-8">



<button type="button" class="btn btn-info btn-lg" >Customer Type</button>







<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
<h3>Type of Customer</h3>
					<form method="post">

<select name="customertype" id="customertype"> 
<option>Select Customer Type</option>
  <option value="Recievable">Recievable</option>
  <option value="Payable">Payable</option>
  
</select>
 <input type="button" name="Submit" id="Submit" value="submit" class="btn btn-primary"> 

</form>
</div>
      </div>
      <div class="modal-footer">
  
      </div>
    </div>

  </div>
</div>


<script>


function name()
{
var input = document.getElementById("customertype");
alert(input);
}

<script>








<?php


  global $type;
  $type=$_POST['customertype'];
  
$query="SELECT * FROM `customer` WHERE `customer_type`='$type'";
$result=mysqli_query($con,$query);




global $type1;
if(!empty($type))
$type1=$type;
 
 
?>

<form method="post">
<div id="target">





<select class="form-control"  name="customername" id="customername">
<option>Select Customer</option>
<?php
while($row=mysqli_fetch_array($result)){
   
   $c_id=$row['customer_id'];
   
   ?>
  
   <option ><a href="invoice.php?Customerid=$c_id"><?php echo $row[1]; ?></a> </option>
   <?php
   
 } 
  ?>

</select>





</div>
  <div class="table-responsive">
    <label>Customer Type</label>
  <td><input type="text" name="customertype" id="customertype" class="form-control" maxlength="0" value="<?php echo $type1; ?>" /></td> 
    <td>
 


    <label>Date</label>
	 <input type="date" name="date"  class="form-control" /> 
    </td>
    <td>
    <!-- <label>PreviousBalance</label>
	<input type="text"  name="PreviousBalance"  class="form-control"/>
</td>
<label>CurrentBalance</label>
	<td><input type="text"  name="CurrentBalance"  class="form-control" /></td> -->
    
    
    
  <form>
      <input type="button" class="add-row" value="Add Row" />
    
    <table id="tble" class="table table-hover">
      <thead>
        <tr>
          <th>Select</th>
          <th>Description</th>
          <th>Quantity</th>
          <th>Amount</th>
          <th>Sub Total</th>
        </tr>
      </thead>
      <tbody id="myList">
        <tr id="1">
          <td id="tr1"><input type="checkbox" name="record[]"  /></td>
          <td id="tr1"><input type="text" name="description[]" id="description" class="description" maxlength="20"/></td>
          <td id="tr1">

            <input type="text" name="quantity[]" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" size="11" class="quantity" onblur="check(this)" maxlength="4"/>
          </td>
          <td id="tr1">
            <input type="text" name="amount[]" class="amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="3" onblur="subTotal(this)" maxlength="3"/>
          
          </td>
          <td id="tr1"><input type="text" name="sub_total[]" class="sub_total" maxlength="0" /></td>
        </tr>
      </tbody>
    </table>
    <button type="button" class="delete-row">DeleteRow</button>
</form>
  
  <input type="submit" name="submit"  class="btn btn-primary"/>
  <th><button class="btn-success btn text-white" id="a" ><a href="pdf.php" style="color:white;">Generate Pdf</a></button></th>
    </td>
  </tr>
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




<?php
 $res=0;
if(isset($_POST['submit']) )  
{

$customername=$_POST['customername'];	
$customertype=$_POST['customertype'];
$date=$_POST['date'];

$Description=$_POST['description'];
$Quantity=$_POST['quantity'];
$Rate=$_POST['amount'];
$Amount=$_POST['sub_total'];



$idquery="select `customer_id` from `customer` where `customer_name`='$customername' AND `customer_type`='$customertype'";
$result=mysqli_query($con,$idquery);
while ($res=mysqli_fetch_array($result)) {

  $RES= $res['customer_id'];
} 
$insert="INSERT INTO     `invoice`(`customer_id`,`customer_type`,`customer_name`,`Date`) VALUES ('$RES','$customertype','$customername','$date')";
$date=$_POST['date'];

$query=mysqli_query($con,$insert) or die(mysqli_error($con));



$idquery1="select `invoice_no` from `invoice` where `customer_id`='$RES' AND `customer_name`='$customername' AND  `customer_type`='$customertype' AND `Date`='$date' ";

  $result1=mysqli_query($con,$idquery1);
        
  
  while ($rep=mysqli_fetch_array($result1)){
    $REP=$rep['invoice_no'];
    echo $REP;
  }

      
if($query != null)
{

  for ($i=0;$i<count($Quantity);$i++){ 
    $ins="INSERT INTO `invoicedetail`(`invoice_no`,`Description`,`qty`,`rate`,`Amount`) VALUES ('$REP','$Description[$i]','$Quantity[$i]','$Rate[$i]','$Amount[$i]')";
    $que=mysqli_query($con,$ins)or die(mysqli_error($con));
   }
$am="SELECT SUM(`Amount`) AS `TA` from  `invoicedetail` where `invoice_no`='$REP'";
$result2=mysqli_query($con,$am);      
while($data=mysqli_fetch_array($result2)) {
$TAMOUNT=$data['TA']; 
echo $TAMOUNT;
}
}
if($que==1)
{
echo "<script>alert('Bill Added');</script>";

}
else
{
echo "<script>alert('Bill Not Added');</script>";
}

$UPDATEAMOUNT="UPDATE `invoice` SET `TotalAmount`='$TAMOUNT' WHERE `invoice_no`='$REP'";
$queryAMT=mysqli_query($con,$UPDATEAMOUNT);

if($customertype=="Recievable")
{
  
  $insert_transaction="INSERT INTO `tranction`(`customer_id`,`Date`,`description`,`Debit`,`voucher`) VALUES ('$RES','$date','invoice.$REP','$TAMOUNT','$REP')"; 
  $run_transaction=mysqli_query($con,$insert_transaction) or die(mysqli_error($con));  
}
else

{
 
  $insert_transaction="INSERT INTO `tranction`(`customer_id`, `Date`, `description`, `Credit`, `voucher`) VALUES ('$RES','$date','invoice.$REP','$TAMOUNT','$REP')";
  
  $run_transaction=mysqli_query($con,$insert_transaction) or die(mysqli_error($con));  

}


$querucust="select `customer_id` from  `customer` where `customer_name`='$customername' and `customer_type`='$customertype'";
$runquerucust=mysqli_query($con,$querucust);

while ($res33=mysqli_fetch_array($runquerucust)) {

  $customer_id= $res33['customer_id'];


} 

if($customertype=="Recievable")
{
  $addbal="UPDATE `customer` SET `balance`=(SELECT `balance` where `customer_id`='$customer_id' )+'$TAMOUNT' where `customer_id`='$customer_id'";
  $run_addbal=mysqli_query($con,$addbal) or die(mysqli_error($con));
}

else
{
  $addbal="UPDATE `customer` SET `balance`=(SELECT `balance` where `customer_id`='$customer_id' )-'$TAMOUNT' where `customer_id`='$customer_id'";
  $run_addbal=mysqli_query($con,$addbal) or die(mysqli_error($con));


}


}
 ?>







