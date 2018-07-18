<?php require 'connection.php';
require 'PHPMailer/PHPMailerAutoload.php';
if(!isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$qry="INSERT INTO contact(name,phone,email,message)VALUES('".$name."','".$phone."','".$email."','".$message."')";
$status = mysqli_query($conn,$qry);
if($status){
	//header("location:mail_contact.php?msg=Inserted Successfully");
	$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

	$body="Name is : $name<br>
		   Email is : $email<br>
		   Contact is : $phone<br>
		   Message is : $message<br><br>";
	//echo $body;

	$sub="Contact Form Submitted From Website";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'aeroties786@gmail.com';          // SMTP username
	$mail->Password = 'karanaayushi'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('aeroties786@gmail.com', 'Enquire');
	$mail->addReplyTo($email, 'Enquire');
	$mail->addAddress('aeroties786@gmail.com');   // Add a recipient
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
else{
	$msg="not";
	echo $msg;
}
}
/*INSERT INTO user_tbl(txt_fn,txt_ln,txt_email,txt_pass,txt_num,gen,isactive,doi) VALUES('".$fn."','".$ln."','".$email."','".$pass."','".$mobile."','".$gen."',$isactive,'".$date."')"*/
?>