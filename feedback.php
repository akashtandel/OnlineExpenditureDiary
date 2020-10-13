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
$user_email=$res['user_email'];
$user_mobile=$res['user_mobile'];

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
                <h2 class="mb-0 site-logo"><a href="user_index.php.">Online Expenditure Dairy</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="user_index.php">Home</a></li>
					  <li><a href="profile.php">Profile</a></li>
                      <li><a href="status.php">Status</a></li>
                      <li  class="active"><a href="feedback.php">feedback</a></li>
                      <li><a href="logout.php">logout</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/image.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h2 class="caption mb-2">Get In Touch</h2>
              <h1 class="">Contact Us</h1>
              
            </div>
          </div>
        </div>
      </div>  

      

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name" value="<?php echo $user_name;?>" readonly>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address" value="<?php echo $user_email;?>" readonly>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control" placeholder="Phone #" value="<?php echo $user_mobile;?>" readonly>  
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" name="feedback" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="feedback" value="Send Message" class="btn btn-primary pill text-white px-5 py-2">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Plot no.5 abrama valsad, India</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+91 9275375372</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">Online Expenditure Dairy.acc@gmail.com</a></p>

            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    

    
    
    

    
    <footer class="site-footer">
      <div class="container">
        

       
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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
if(isset($_POST['feedback']))
{
	include("connect.php");

	$id;
	$remail=$_SESSION['useremail'];
	$feedback=$_POST['feedback'];
	$date=date("Y-m-d");
	$pstatus = "yes";

			$res1 = mysqli_query($con,"select max(f_id) from tbl_feedback");
			$fid=0;
			while($r1=mysqli_fetch_row($res1))
			{
				$fid=$r1[0];
			}
			$fid++;
			$res2 = mysqli_query($con,"insert into tbl_feedback values('$fid','$id','$feedback','$date','$pstatus')");
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
				$mail->Subject="Feedback";
				$mail->Body="<h1 align=center>Online Expenditure Dairy</h1><h4 align=center> Thanks you for your valueble feedback   and your feedback is <b>$feedback </b>on Online Expenditure Dairy.</h4>";
								
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
	mysqli_close($con);
}
?>