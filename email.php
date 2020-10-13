<?php
//session_start();
/*error_reporting(0);
include("connect.php");

$sql1=mysqli_query($con,"select * from tbl_payment where user_id='$id' and status='yes'");
	while($res1=mysqli_fetch_assoc($sql1))
	{
		$ptype=$res1['p_type'];
		$pmoney=$res1['p_money'];
		$pid=$res1['p_id'];
		$uid=$res1['user_id'];
		$ptype=$res1['p_type'];
		$pname=$res1['p_name'];
		$pmoney=$res1['p_money'];
		$pdes=$res1['p_des'];
		$pdate=$res1['p_date'];*/
				 
	if($pdate)
	{
	if($ptype=='debit' && $pdes=='on loan')
	{
		//$pname
		$sql2=mysqli_query($con,"select * from tbl_user where user_id='$uid'");
		while($res2=mysqli_fetch_assoc($sql2))
		{
			$uname=$res2['user_name'];
		}
		require'PHPMailer-master/PHPMailerAutoload.php';
		$mail=new PHPMailer;
		$mail->isSMTp();
		$mail->Host="smtp.gmail.com";
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure="tls";
		$mail->Username="byclever.acc@gmail.com";
		$mail->Password="byclever1234";
		$mail->setFrom("byclever.acc@gmail.com","Online Expenditure Dairy");
		$mail->addAddress($pname);
		$mail->addReplyTo($pname);

		$mail->isHTML(true);
		$mail->Subject="Payment alert !";
		$mail->Body="<h1 align=center>Online Expenditure Dairy</h1><h4 align=center> you have to pay <b>$pmoney</b> to <b>$uname</b>.</h4>";
						
		if(!$mail->send())
		{

			echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}

	}
	
?>