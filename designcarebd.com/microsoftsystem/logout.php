<?php
require 'connection.php';
session_start();

$customerid=$_SESSION['username'];
echo $customerid;
$qry1="SELECT * FROM signup WHERE username='$customerid'";
$rs=mysqli_query($conn,$qry1);
$r=mysqli_fetch_assoc($rs);
//echo $qry1;
$id=$r['id'];
//echo $id;
$date=date('Y-m-d');


$qry="UPDATE orderdetail SET flag=0 WHERE customerid= $id AND date='$date'";
$rs1=mysqli_query($conn,$qry);
///echo $qry;
if($rs1){

session_unset();
session_destroy();
header("location:login.php");
}



?>