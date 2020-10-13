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
$user_email=$_SESSION['useremail'];
$user_name=$res['user_name'];
$user_mobile=$res['user_mobile'];
$user_work=$res['user_work'];
$user_password=$res['user_password'];
$user_gender=$res['user_gender'];




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
                      <li><a href="user_index.php">Home</a></li>
					  <li class="active"><a href="profile.php">Profile</a></li>
                      <li><a href="status.php">Status</a></li>
                      <li><a href="feedback.php">feedback</a></li>
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
  
    
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/image.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h2 class="caption mb-2">Mind can change everything</h2>
              <h1 class="">Update your profile</h1>
              
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
                  <center><label class="font-weight-bold" for="fullname"><font size="16">Your profile</font></label></center>
                </div>
              </div>
			   <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="name" value="<?php echo $user_name;?>" class="form-control" onkeyup="showHint(this.value)" placeholder="Your Name" pattern="[A-Z a-z]+$" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="email" name="email" value="<?php echo $user_email;?>" readonly class="form-control" placeholder="Your Email" onkeyup="showHint(this.value)" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="mobile" value="<?php echo $user_mobile;?>" class="form-control" placeholder="Mobile Number" onkeyup="showHint(this.value)" pattern="[0-9]{10}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="work" value="<?php echo $user_work;?>" class="form-control" placeholder="Your Bussiness" onkeyup="showHint(this.value)" required>
	                </div>
	            </div>
              </div>
			  
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="pass" value="<?php echo $user_password;?>" readonly class="form-control" placeholder="Password  like (User@1234)*" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="cpass" class="form-control" placeholder="change password" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
	            </div>
              </div>	
			  <div class="row">
				<div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="crepass" class="form-control" placeholder="Re-enter password" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
	            </div>
                	<div class="col-md-6">
	                <div class="form-group">
	                  Gender:
					  <?php 
					  $m=$f="";
					  if($user_gender=="male")
					  {
						  $m="checked";
					  }
					  else
					  {
						  $f="checked";
					  }
					  ?>
					  <input type="radio" name="gender" value="male" <?php echo $m;?>>  Male
					  <input type="radio" name="gender" value="female" <?php echo $f;?>>  Female
	                </div>
                </div>
              </div>
       
              <div class="row form-group">
                <div class="col-md-12" align="center">
                  <input type="submit" name="update" value="Update" class="btn btn-primary pill text-white px-5 py-2">
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
if(isset($_POST['update']))
{
	include("connect.php");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$work=$_POST['work'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$crepass=$_POST['crepass'];
	$gender=$_POST['gender'];
	if($cpass!=$crepass)
	{
		//echo "heyy password not match";
		echo "<script type='text/javascript'>";
		echo "alert('Password did not match');";
		echo "</script>";
	}
	else
	{
		$res2 = mysqli_query($con,"update tbl_user set user_name='$name',user_mobile='$mobile',
		user_work='$work',user_password='$cpass',user_gender='$gender' where user_email='$email'");
		if($res2=="1")
		{
			echo "<script type='text/javascript'>";
			echo "alert('Profile Update');";
			echo "window.location.href='profile.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('check details!!!');";
			echo "window.location.href='profile.php';";
			echo "</script>";
		}
	}
	mysqli_close($con);
}
?>
