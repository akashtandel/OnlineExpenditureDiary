<?php
session_start();
error_reporting(0);
include("connect.php");
$user_profile = $_SESSION['useremail'];
if($user_profile==true)
{
	
}
else
{
	echo "<script type='text/javascript'>";
	echo "window.location.href='index.php';";
	echo "</script>";
}
$sql = "select * from tbl_user where user_email='$user_profile'";
$cmd = mysqli_query($con,$sql);
$res = mysqli_fetch_assoc($cmd);
$id=$res['user_id'];
$user_name=$res['user_name'];

$uid=$_GET['uid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online Expenditure Dairy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.php">Online Expenditure Dairy</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active"><a href="index.php">Home</a></li>
                      <li><a href="profile.php">Profile</a></li>
                      <!--<li><a href="balance.php">balance</a></li>-->
                      <li><a href="status.php">Status</a></li>
                      <li><a href="feedback.php">Feedback</a></li>
                      <li><a href="logout.php">Logout</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/image.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h2 class="caption mb-2">Insert your Data in Online Expenditure Dairy from below</h2>
              <h1 class="">Hello <?php echo $user_name;?></h1>
              
            </div>
          </div>
        </div>
      </div>
      </div> 
    </div>

		
         <div class="col-md-25 mb-5">
            <form method="post" class="p-5 bg-white">
				<?php 
				if($uid==true)
				{
					$sql1 = "select * from tbl_payment where p_id='$uid'";
					$cmd1 = mysqli_query($con,$sql1);
					$res1 = mysqli_fetch_assoc($cmd1);
					$p_type=$res1['p_type'];
					$p_name=$res1['p_name'];
					$p_money=$res1['p_money'];
					$p_des=$res1['p_des'];
				?>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <center><label class="font-weight-bold" for="fullname"><font size="16">Update payment Details</font></label></center>
                </div>
              </div>
			  
			    <div class="col-md-6">
	                <div class="form-group">
	                  Payment Type:
					  <?php 
					  $d=$c="";
					  if($p_type=="debit")
					  {
						  $d="checked";
					  }
					  else
					  {
						  $c="checked";
					  }
					  ?>
					  <input type="radio" name="p_type" value="debit" <?php echo $d;?>>  <font color="red">Debit</font>
					  <input type="radio" name="p_type" value="credit" <?php echo $c;?>>  <font color="green">Credit</font>
	                </div>
                </div>
			   <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
					
	                  <input type="email" name="p_name" class="form-control" onkeyup="showHint(this.value)" placeholder="Payment Name" value="<?php echo $p_name;?>"  required>
	                </div>
                </div>
				<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="p_money" class="form-control" onkeyup="showHint(this.value)" placeholder="How much Money ??" value="<?php echo $p_money;?>"  pattern="[0-9]{1,10}" required>
	                </div>
                </div>
                
              </div>
			
			  <div class="form-group">
				Payment Details :-
                <input type="text" name="p_des" class="form-control" value="<?php echo $p_des;?>" placeholder="Payment Description" required></textarea>
              </div>
		
              <div class="row form-group">
                <div class="col-md-12" align="center">
                  <input type="submit" name="update" value="Update" class="btn btn-primary pill text-white px-5 py-2">
                </div>
              </div>
				<?php
				}
				else
				{
				?>
				<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <center><label class="font-weight-bold" for="fullname"><font size="16">Insert new payment Details</font></label></center>
                </div>
              </div>
			   <div class="form-group">
			   <?php
				$credit=0;
				$debit=0;
				$money=0;
				$sql1=mysqli_query($con,"select * from tbl_payment where user_id='$id'and status='yes'");
				while($res1=mysqli_fetch_assoc($sql1))
				{
					$ptype=$res1['p_type'];
					$pmoney=$res1['p_money'];
					if($ptype=='credit')
					{
						$credit=$credit+$pmoney;
					}
					//echo $credit;
					if($ptype=='debit')
					{
						$debit=$debit+$pmoney;
					}
					$money=$credit-$debit;
				}
				
				?>				
				<font color="blue"><?php echo $user_name;?></font> your Current/Avalible  balance is:-
                <label><font color="red"><?php echo $money;?></font></label>
				<input type="hidden" name="h_money" value="<?php echo $money;?>">
              </div>
			    <div class="col-md-6">
	                <div class="form-group">
	                  Payment Type:
					  <input type="radio" name="p_type" value="debit" required>  <font color="red">Debit</font>
					  <input type="radio" name="p_type" value="credit">  <font color="green">Credit</font>
	                </div>
                </div>
			   <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
					
	                  <input type="email" name="p_name" class="form-control" onkeyup="showHint(this.value)" placeholder="Payment email"  required>
	                </div>
                </div>
				<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="p_money" class="form-control" onkeyup="showHint(this.value)" placeholder="How much Money ??"  pattern="[0-9]{1,10}" required>
	                </div>
                </div>
                
              </div>
			
			  <div class="form-group">
				Payment Details :-
                <textarea name="p_d" cols="30" rows="4" class="form-control" placeholder="Payment Description" required></textarea>
              </div>
		
              <div class="row form-group">
                <div class="col-md-12" align="center">
                  <input type="submit" name="done" value="Done" class="btn btn-primary pill text-white px-5 py-2">
                </div>
              </div>
				<?php
				}
				?>
            </form>
		</div>

    

 
    
    <footer class="site-footer">
      <div class="container">
        <div class="text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved <a href="#" target="_blank" >Shivam & Vishal</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>

<?php
if(isset($_POST['done']))
{
	include("connect.php");

	$id;
	$remail=$_SESSION['useremail'];
	$check=0;
	$ptype = $_POST['p_type'];
	$money = $_POST['h_money'];
	$pname= $_POST['p_name'];
	$pmoney= $_POST['p_money'];
	$pd= $_POST['p_d'];
	$pdate=date("Y-m-d");
	$pstatus = "yes";
	echo $check=$money-$pmoney;
	if($money<=0 && $ptype=='debit')
	{
		echo "<script type='text/javascript'>";
		echo "alert('your balance is zero');";
		echo "</script>";
	}
	elseif($check<0 && $ptype=='debit')
	{
		echo "<script type='text/javascript'>";
		echo "alert('your balance is low');";
		echo "</script>";
	}
		else
		{
			$res1 = mysqli_query($con,"select max(p_id) from tbl_payment");
			$pid=0;
			while($r1=mysqli_fetch_row($res1))
			{
				$pid=$r1[0];
			}
			echo $pid++;
			$res2 = mysqli_query($con,"insert into tbl_payment values('$pid','$id','$ptype','$pname','$pmoney','$pd','$pdate','$pstatus')");
			if($res2=="1")
			{
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
				$mail->addAddress($remail);
				$mail->addReplyTo($remail);

				$mail->isHTML(true);
				$mail->Subject="Account $ptype";
				$mail->Body="<h1 align=center>Online Expenditure Dairy</h1><h4 align=center> <b>$rname</b> Your Account $ptype by $pmoney  and your current balance is $check and the payment for $pname on Online Expenditure Dairy.</h4>";
								
				if(!$mail->send())
				{

					echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
				echo "<script type='text/javascript'>";
				echo "alert('Record Inserted');";
				echo "window.location.href='user_index.php';";
				echo "</script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('check details!!!');";
				echo "window.location.href='user_index.php';";
				echo "</script>";
			}
		}
	mysqli_close($con);
}
?>

<?php
if(isset($_POST['update']))
{
	$uid=$_GET['uid'];
	$p_type=$_POST['p_type'];
	$p_name=$_POST['p_name'];
	$p_money=$_POST['p_money'];
	$p_des=$_POST['p_des'];
	//$p_des=$_POST['p_des'];
	//$status = "yes";
	
	$res1 = mysqli_query($con,"update tbl_payment set p_type='$p_type',p_name='$p_name',p_money='$p_money',p_des='$p_des' where p_id='$uid'");
	if($res1=="1")
	{
		echo "<script type='text/javascript'>";
		echo "alert(' your details updated');";
		echo "window.location.href='status.php';";
		echo "</script>";
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('check details!!!');";
		echo "window.location.href='user_index.php?uid=$uid';";
		echo "</script>";
	}
	mysqli_close($con);
	
	
}
?>