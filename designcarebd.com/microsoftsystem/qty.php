<?php 
require 'connection.php';
session_start();

	$qty=$_POST['qty'];
	$proid=$_POST['id'];
	$price=$_POST['price'];
	//echo $qty;
	echo "\n".$proid;
	//echo $price;
	
	$totalprice=$qty*$price;
	$customerid=$_SESSION['username'];
	echo $customerid;
	$sql="SELECT * FROM signup WHERE username = '$customerid'";
	$res=mysqli_query($conn, $sql);
    $r = mysqli_fetch_assoc($res);
	$cid=$r['id'];
	$flag=1;
	$date=date('Y-m-d');

/*"INSERT INTO quantity(customerid,productid,qty,price,totalprice,flag) VALUES
		  $cid,$proid,$qty,$price,$totalprice,$flag";*/
		/* $qry="INSERT INTO orderdetail(customerid,productid,qty,price,totalprice,flag)VALUES($cid,$proid,$qty,$price,$totalprice,$flag)";*/
		$qry="UPDATE orderdetail SET qty=$qty,totalprice=$totalprice WHERE customerid=$cid AND productid=$proid AND date='$date' ";


		$rs=mysqli_query($conn,$qry);
		//echo $qry;

		if($rs)
		{
			header("location:cart.php?success");
		}
		else{
			header("location:cart.php?unsuccess");
		}

	
	


?> 

