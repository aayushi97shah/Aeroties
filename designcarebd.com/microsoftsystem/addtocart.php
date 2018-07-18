<?php
require 'connection.php';
session_start();
if(isset($_POST['submit'])){
$customerid=$_SESSION['username'];
$proid=$_GET['id'];
	//echo $customerid;
	$sql="SELECT * FROM signup WHERE username = '$customerid'";
	$res=mysqli_query($conn, $sql);
    $r = mysqli_fetch_assoc($res);
    $qry1="SELECT * from PRODUCTS where id=$proid";
    $rs=mysqli_query($conn,$qry1);
    $r1=mysqli_fetch_assoc($rs);
	
	$cid=$r['id'];
	$flag=1;

$qty=1;
$price=$r1['price'];
$totalprice=$r1['price'];
$date=date('Y-m-d');
echo $date;
$qry="INSERT INTO orderdetail(customerid,productid,qty,price,totalprice,flag,date)VALUES($cid,$proid,$qty,$price,$totalprice,$flag,'".$date."')";
$result=mysqli_query($conn,$qry);
echo $qry;
}



if(isset($_SESSION['cart']) & !empty($_SESSION['cart']) & isset($_POST['submit'])){
$items = $_SESSION['cart'];

//$qty=$_POST['qty'];
//$qty=$_SESSION['qty'];
//$qtys=explode(",", $qty);
$cartitems = explode(",", $items);
$items .= "," . $_GET['id'];
//$qty .="," .$_POST['qty'];
$_SESSION['cart'] = $items;
//$_SESSION['qty']=$qty;
//echo $_SESSION['qty'];
header('location: buynow.php?status=success');
}else{
//$qty=$_POST['qty'];
$items = $_GET['id'];
//$_SESSION['qty']=$qty;
$_SESSION['cart'] = $items;
//echo $_SESSION['qty'];
header('location: buynow.php?status=success');
}

?> 
