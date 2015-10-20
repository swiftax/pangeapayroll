<?php
$connection = mysql_connect("localhost", "root", "p@ngE78A"); // Establishing Connection with Server..
$db = mysql_select_db("pangea", $connection); // Selecting Database
//Fetching Values from URL

$contactname=$_POST['contactname'];
$contactemail=$_POST['contactemail'];
$contactphone=$_POST['contactphone'];
$contactmessage=$_POST['contactmessage'];
$contactrefer=$_POST['contactrefer'];
//Insert query
$query = mysql_query("insert into contacts(name, email,phone,message,referer,date) values ('$contactname', '$contactemail', '$contactphone', '$contactmessage', '$contactrefer',now())");

mysql_close($connection); // Connection Closed


$subject = "Thank you Mail";

$message = '
<div style="padding:0px;margin:0px;font-family:Arial,Helvetica,sans-serif;width:100%;min-height:100%" bgcolor="#d5d5d5">
  <div style="margin:0 auto;width:698px;min-height:auto; background:#fff; border:solid 1px #373035;font-family:Myriad Pro,Arial,Helvetica,sans-serif">
    <div style="width:698px;min-height:50px;text-align:center;display:block; background:#20203a; padding:30px 0 22px;"> <a target="_blank" href="#" style="margin:0 auto; width:195px;"><img src="http://52.74.25.94/pangea/img/logo.png" style="border:0px none;width:217px;height:41px;"></a> </div>
    <div style="width:600px;padding:50px;">
      <h6 style="font-size:15px; color:#666666; margin:0 0 30px 0; font-weight:bold;">Hello '.$contactname.',</h6>
      <h1 style="margin:0; color:#373035; font-size:24px; font-weight:bold; text-transform:none; padding-bottom:10px;">Welcome to Pangea Payroll </h1>
      <p style="color:#2696e0; font-size:18px; line-height:24px; margin:0;"> We will contact you soon! <br />
      </p>
    </div>
    <div style="padding:20px 50px 50px 50px; width:600px;">
      <h5 style="font-size:14px; color:#333333; margin:0; font-weight:normal; padding-bottom:5px;">Thank you!</h5>
      <h6  style="font-size:15px; color:#666666; margin:0; font-weight:normal;">Pangea Payroll</h6>
    </div>
    <div class="footer" style="padding:10px 15px; height:30px; line-height:30px; background:#1e1e1e;">
      <p style="float:left; margin:0; font-size:14px; color:#ccccc9;">Copyright @ Pangea Payroll 2015</p>
      <div style="float:right;"> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">About us </a> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Press</a> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Help </a> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Contact</a> </div>
    </div>
  </div>
</div>';

// Always set content-type when sending HTML email
$from ='info@pangeapayroll.com';
$headers  = "From: Pangea Payroll: New Lead " . $from . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($contactemail,$subject,$message,$headers);

$to = 'info@pangeapayroll.com';
$subject = "Contact Mail";

$message = '<div style="padding:0px;margin:0px;font-family:Arial,Helvetica,sans-serif;width:100%;min-height:100%" bgcolor="#d5d5d5">
  <div style="margin:0 auto;width:698px;min-height:auto; background:#fff; border:solid 1px #373035;font-family:Myriad Pro,Arial,Helvetica,sans-serif">
    <div style="width:698px;min-height:50px;text-align:center;display:block; background:#20203a; padding:30px 0 22px;"> <a target="_blank" href="#" style="margin:0 auto; width:195px;"><img src="http://52.74.25.94/pangea/img/logo.png" style="border:0px none;width:217px;height:41px;"></a> </div>
    <div style="width:600px;padding:50px 50px 0 50px;">
      <h6 style="font-size:15px; color:#666666; margin:0; font-weight:bold;">Hello Pangea Payroll,</h6>
      
     		
    </div>
	  
	  <div style="float:left;padding:20px 50px 50px 50px; width:600px;">
	  
		  	<span style="margin:10px 0; float:left">
				<h5 style="float:left; padding:0 30px 0 0; color:#6C6069; font-size:14px; margin:0; width:200px;font-weight:normal;">Name</h5>
				<h6 style="float:left; margin:0; font-size:15px; font-weight:normal; color:#666666; width:360px;lin-height:21px">'.$contactname.'</h6>
		  </span>
			<span style="margin:10px 0; float:left">
				<h5 style="float:left; padding:0 30px 0 0; color:#6C6069; font-size:14px; margin:0; width:200px;font-weight:normal;">Email</h5>
				<h6 style="float:left; margin:0; font-size:15px; font-weight:normal; color:#666666; width:360px;lin-height:21px">'.$contactemail.'</h6>
		  </span>
			<span style="margin:10px 0; float:left">
				<h5 style="float:left; padding:0 30px 0 0; color:#6C6069; font-size:14px; margin:0; width:200px;font-weight:normal;">Phone</h5>
				<h6 style="float:left; margin:0; font-size:15px; font-weight:normal; color:#666666; width:360px;lin-height:21px">'.$contactphone.'</h6>
		  </span>
		  	<span style="margin:10px 0; float:left">
				<h5 style="float:left; padding:0 30px 0 0; color:#6C6069; font-size:14px; margin:0; width:200px;font-weight:normal;">Who referred you to our site?</h5>
				<h6 style="float:left; margin:0; font-size:15px; font-weight:normal; color:#666666; width:360px;lin-height:21px">'.$contactrefer.'</h6>
		  </span>
			<span style="margin:10px 0; float:left">
			<h5 style="float:left; padding:0 30px 0 0; color:#6C6069; font-size:15px; margin:0; width:200px;font-weight:normal;">Message</h5>
			<p style="color:#666666; font-size:14px; line-height:18px; margin:0;width:360px; float:left;"> '.$contactmessage.'<br>
			</p>
	  		</span>
	  </div>
	  
    <div style="padding:20px 50px 50px 50px; width:600px;">
      <h5 style="font-size:14px; color:#333333; margin:0; font-weight:normal; padding-bottom:5px;">Thank you!</h5>
      <h6  style="font-size:15px; color:#666666; margin:0; font-weight:normal;">'.$contactname.'</h6>
    </div>
    <div class="footer" style="padding:10px 15px; height:30px; line-height:30px; background:#1e1e1e;">
      <p style="float:left; margin:0; font-size:14px; color:#ccccc9;">Copyright @ Pangea Payroll 2015</p>
      <div style="float:right;"> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">About us </a> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Press</a> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Help </a> <a href="#" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Contact</a> </div>
    </div>
  </div>
</div>
';

// Always set content-type when sending HTML email
$from ='info@pangeapayroll.com';
$headers  = "From: " . $from . "\r\n"; 
$headers .= 'To: Pangea Payroll <info@pangeapayroll.com>' . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$message,$headers);

?>
