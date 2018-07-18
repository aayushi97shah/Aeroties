<?php
	require 'connection.php';
	session_start();

	//echo $_SESSION['username'];
 /*if(!isset($_SESSION['username']))
 {
    header('location:login.php');
 }
	var_dump($_POST);*/
	if(!isset($_POST['submit']))
	{
		header("location:login.php");
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['username']=$username;
	$qry = "SELECT * FROM signup WHERE username='".$username."' AND password='".$password."'";
	echo "$qry";

	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs) > 0)
	{
		$row = mysqli_fetch_assoc($rs);

		//echo $row['username'].$row['password'];
		//$_SESSION['username']=$row['username'];
		//$_SESSION['uid']=$row['fn_txt'];
		header("location:buynow.php");
	}
	else
	{
		header("location:login.php");
	}

?>