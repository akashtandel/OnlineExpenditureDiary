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
              <h2 class="caption mb-2">Mind can change everything</h2>
              <h1 class="">Register for Online Expenditure Dairy</h1>
              
            </div>
          </div>
        </div>
      </div>
      </div> 
    </div>

		
         <div class="col-md-25 mb-5">
            <form method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <center><label class="font-weight-bold" for="fullname"><font size="16">Registration</font></label></center>
                </div>
              </div>
			   <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="r_name" class="form-control" onkeyup="showHint(this.value)" placeholder="Your Name" pattern="[A-Z a-z]+$" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="email" name="r_email" class="form-control" placeholder="Your Email" onkeyup="showHint(this.value)" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="r_mobile" class="form-control" placeholder="Mobile Number" onkeyup="showHint(this.value)" pattern="[0-9]{10}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="r_work" class="form-control" placeholder="Your Bussiness" onkeyup="showHint(this.value)" required>
	                </div>
	            </div>
              </div>
			  
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="r_pass" class="form-control" placeholder="Password  like (User@1234)*" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="r_repass" class="form-control" placeholder="Re-Enter password" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
	            </div>
              </div>	
			  <div class="row">
			  
            	<!--<div class="col-md-6">
	                <div class="form-group">
	                  Type of Training:-
					<select name="m_ttype" class="form-group" required>
						<option class="form-group" value="Regular">Regular</option>
						<option class="form-group" value="personal">Personal</option>
						
					</select>
	                </div>
                </div>-->
                	<div class="col-md-6">
	                <div class="form-group">
	                  Gender:
					  <input type="radio" name="gender" value="male">  Male
					  <input type="radio" name="gender" value="female">  Female
	                </div>
                </div>
              </div>
              
              <!--<div class="form-group">
                <textarea name="m_d" cols="30" rows="4" class="form-control" placeholder="Description" required></textarea>
              </div>
			  Upload Document:-
			  <div class="form-group">
                <input type="file" name="t_image" class="form-control" value=" ">
              </div>-->
              <div class="row form-group">
                <div class="col-md-12" align="center">
                  <input type="submit" name="register" value="Register" class="btn btn-primary pill text-white px-5 py-2">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12" align="center">
				<a href="index.php">Already have account..</a>
                </div>
              </div>

  
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
if(isset($_POST['register']))
{
	include("connect.php");

	$rname = $_POST['r_name'];
	$remail = $_POST['r_email'];
	$rmobile = $_POST['r_mobile'];
	$rwork = $_POST['r_work'];
	$rpwd = $_POST['r_pass'];
	$repwd = $_POST['r_repass'];
	$rgender = $_POST['gender'];
	$rstatus = "yes";

	
	
	if($rpwd!=$repwd)
	{
		//echo "heyy password not match";
		echo "<script type='text/javascript'>";
		echo "alert('Password did not match');";
		echo "</script>";
	}
	else
	{
			
		$res = mysqli_query($con,"select * from tbl_user where user_email='$remail'");
		if(mysqli_num_rows($res)>0)
		{
			echo "<script type='text/javascript'>";
			echo "alert('Email Id Already Exists');";
			echo "</script>";
		}
		else
		{
			$res1 = mysqli_query($con,"select max(user_id) from tbl_user");
			$rid=0;
			while($r1=mysqli_fetch_row($res1))
			{
				$rid=$r1[0];
			}
			$rid++;
			$res2 = mysqli_query($con,"insert into tbl_user values('$rid','$rname','$remail','$rmobile','$rwork','$rpwd','$rgender','$rstatus')");
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
				$mail->Subject="Registration done";
				$mail->Body="<h1 align=center>Online Expenditure Dairy</h1><h4 align=center>Thank you <b>$rname</b> for Registration on Online Expenditure Dairy.</h4>";
								
				if(!$mail->send())
				{

					echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
				echo "<script type='text/javascript'>";
				echo "alert('Registration Done');";
				echo "window.location.href='index.php';";
				echo "</script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('check details!!!');";
				echo "window.location.href='registration.php';";
				echo "</script>";
			}
		}
	}
	mysqli_close($con);
}
?>
