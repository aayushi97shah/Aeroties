<?php require 'connection.php';
/*if(!isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$name=$_POST['name'];
		$sql="INSERT INTO signup(username,password,email,phone,name)VALUES('".$username."','".$password."','".$email."',$phone,'".$name."')";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			header("location:login.php");
		}
	}*/
		session_start();
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$name=$_POST['name'];
		$_SESSION['username']=$username;
		echo $_SESSION['username'];
		$sql="INSERT INTO signup(username,password,email,phone,name)VALUES('".$username."','".$password."','".$email."',$mobile,'".$name."')";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			header("location:login.php?success");
			//echo "qq";
		}
		else{
			header("location:login.php?insert again");
		}
	
		

?>
