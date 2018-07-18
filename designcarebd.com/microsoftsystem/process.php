<?php
require 'connection.php' ;
require 'PHPMailer/PHPMailerAutoload.php';
session_start();


		$name=$_POST['name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$price1=$_SESSION['totalprice'];
		//echo $name;

		$qry="INSERT INTO customer(name,address,email,phone)VALUES('".$name."','".$address."','".$email."',$phone)";
		$rs=mysqli_query($conn,$qry);
		$customerid=mysqli_insert_id($conn);
		$date=date('Y-m-d');
		$qry1="INSERT INTO orders(date,customerid,totalprice)VALUES('".$date."',$customerid,$price1)";
		$rs1=mysqli_query($conn,$qry1);
		$username=$_SESSION['username'];
		$qr="SELECT * from signup WHERE username='$username'";
		$result=mysqli_query($conn,$qr);
		$row=mysqli_fetch_assoc($result);
		$id=$row['id'];
		//echo $id;
		$qry2="UPDATE orderdetail SET flag=0 WHERE customerid=$id AND date='$date'";
		$rs2=mysqli_query($conn,$qry2);
		$query="SELECT * from orderdetail WHERE customerid=$id AND date='$date'";
		$r=mysqli_query($conn,$query);
		if($r){
			
				/*while($res=mysqli_fetch_assoc($r)){
					$proid=$res['productid'];
					$que="SELECT * FROM products Where id=$proid";
					$con=mysqli_query($conn,$que);
					$rst=mysqli_fetch_assoc($con);
					$item=$rst['title'];
					$price=$rst['price'];
					$qty=$res['qty'];
					$total=$res['totalprice'];*/
					
					$body=
							"
		   					Your Toatal order is: $price1<br>";
		   			


					//echo $body."\r\n" .$bd;
					//echo $bd1;
					
					//echo $proid;
					$sub="Your Order Details";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'aeroties786@gmail.com';          // SMTP username
	$mail->Password = 'karanaayushi'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('aeroties786@gmail.com', 'Your Order');
	$mail->addReplyTo('aeroties786@gmail.com', 'Your Order');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;
	

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
}



/*INSERT INTO user_tbl(txt_fn,txt_ln,txt_email,txt_pass,txt_num,gen,isactive,doi) VALUES('".$fn."','".$ln."','".$email."','".$pass."','".$mobile."','".$gen."',$isactive,'".$date."')"*/

				
				
				//echo $body."\r\n" .$bd;

		

		
		else{
			echo "sry";
		}
		
		

	


		
		
		die('Thank You! your order has been placed!');
	
	

		


?>
		
		