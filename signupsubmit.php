<?php
$connection = mysql_connect("localhost", "root", "p@ngE78A"); // Establishing Connection with Server..
$db = mysql_select_db("pangea", $connection); // Selecting Database
//Fetching Values from URL
$fullname=$_POST['fullname'];
$email=$_POST['email'];

//Insert query
$query = mysql_query("insert into users(fullname, email,date) values ('$fullname', '$email',now())");
//echo "Your message has been successfully sent. We will contact you very soon!";
mysql_close($connection); // Connection Closed


$subject1 = "Thank You Mail";

$message1 = '
<div style="padding:0px;margin:0px;font-family:Arial,Helvetica,sans-serif;width:100%;min-height:100%" bgcolor="#d5d5d5">
  <div style="margin:0 auto;width:698px;min-height:auto; background:#fff; border:solid 1px #373035;font-family:Myriad Pro,Arial,Helvetica,sans-serif">
    <div style="width:698px;min-height:50px;text-align:center;display:block; background:#20203a; padding:30px 0 22px;"> <a target="_blank" href="#" style="margin:0 auto; width:195px;"><img src="http://52.74.25.94/pangea/img/logo.png" style="border:0px none;width:217px;height:41px;"></a> </div>
    <div style="width:600px;padding:50px;">
      <h6 style="font-size:15px; color:#666666; margin:0 0 30px 0; font-weight:bold;">Hello '.$fullname.',</h6>
      <h1 style="margin:0; color:#373035; font-size:24px; font-weight:bold; text-transform:none; padding-bottom:10px;">Welcome to Pangea Payroll </h1>
      <p style="color:#2696e0; font-size:18px; line-height:24px; margin:0;"> We will contact you soon!</p> <br />
      <p style="color:#2696e0; text-decoration:none; font-size:18px; line-height:24px; margin:0;"> Please check out the demo <a  style="text-decoration:none; background-color: #2696e0; color:#fff; padding: 0.25em;" href="https://projects.invisionapp.com/share/X54EF2JQK#/screens">here</a>.<br />
      </p>
    </div>
    <div style="padding:20px 50px 50px 50px; width:600px;">
      <h5 style="font-size:14px; color:#333333; margin:0; font-weight:normal; padding-bottom:5px;">Thank you!</h5>
      <h6  style="font-size:15px; color:#666666; margin:0; font-weight:normal;">Pangea Payroll</h6>
    </div>
    <div class="footer" style="padding:10px 15px; height:30px; line-height:30px; background:#1e1e1e;">
      <p style="float:left; margin:0; font-size:14px; color:#ccccc9;">Copyright @ Pangea Payroll 2015</p>
      <div style="float:right;"> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">About us </a> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Press</a> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Help </a> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Contact</a> </div>
    </div>
  </div>
</div>';
// Always set content-type when sending HTML email

$from ='info@pangeapayroll.com';


$headers  = "From: Pangea Payroll " . $from . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($email,$subject1,$message1,$headers);

$to = 'info@pangeapayroll.com';
$subject2 = "Signup Mail";

$message2 = '<div style="padding:0px;margin:0px;font-family:Arial,Helvetica,sans-serif;width:100%;min-height:100%" bgcolor="#d5d5d5">
  <div style="margin:0 auto;width:698px;min-height:auto; background:#fff; border:solid 1px #373035;font-family:Myriad Pro,Arial,Helvetica,sans-serif">
    <div style="width:698px;min-height:50px;text-align:center;display:block; background:#20203a; padding:30px 0 22px;"> <a target="_blank" href="#" style="margin:0 auto; width:195px;"><img src="http://52.74.25.94/pangea/img/logo.png" style="border:0px none;width:217px;height:41px;"></a> </div>
    <div style="width:600px;padding:50px 50px 0 50px;">
      <h6 style="font-size:15px; color:#666666; margin:0; font-weight:bold;">Hello Pangea Payroll,</h6>
      
     		
    </div>
	  
	  <div style="float:left;padding:20px 50px 50px 50px; width:600px;">
	  
		  	<span style="margin:10px 0; float:left">
				<h5 style="float:left; padding:0 30px 0 0; color:#6C6069; font-size:14px; margin:0; width:200px;font-weight:normal;">Name</h5>
				<h6 style="float:left; margin:0; font-size:15px; font-weight:normal; color:#666666; width:360px;lin-height:21px">'.$fullname.'</h6>
		  </span>
			<span style="margin:10px 0; float:left">
				<h5 style="float:left; padding:0 30px 0 0; color:#6C6069; font-size:14px; margin:0; width:200px;font-weight:normal;">Email</h5>
				<h6 style="float:left; margin:0; font-size:15px; font-weight:normal; color:#666666; width:360px;lin-height:21px">'.$email.'</h6>
		  </span>	
			
	  </div>
	  
    <div style="padding:20px 50px 50px 50px; width:600px;">
      <h5 style="font-size:14px; color:#333333; margin:0; font-weight:normal; padding-bottom:5px;">Thank you!</h5>
      <h6  style="font-size:15px; color:#666666; margin:0; font-weight:normal;">'.$fullname.'</h6>
    </div>
    <div class="footer" style="padding:10px 15px; height:30px; line-height:30px; background:#1e1e1e;">
      <p style="float:left; margin:0; font-size:14px; color:#ccccc9;">Copyright @ Pangea Payroll 2015</p>
      <div style="float:right;"> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">About us </a> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Press</a> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Help </a> <a href="http://www.pangeapayroll.com" style="color:#ccccc9; text-decoration:none; font-size:14px; margin-left:10px;">Contact</a> </div>
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

mail($to,$subject2,$message2,$headers);
?>
