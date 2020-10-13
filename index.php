<?php
session_start();
//error_reporting(0);

//include("email.php");
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
              <h1 class="">Welcome To Online Expenditure Dairy</h1>
              
            </div>
          </div>
        </div>
      </div>
      </div> 
    </div>
<center>
    <div class="container">
      <!--<div class="image bg-image" style="background-image: url('images/img_1.jpg');"></div>-->
         <div class="col-lg-6 mb-10">
            <form  method="post" align="center">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <center><label class="font-weight-bold" for="fullname"><font size="16">Login</font></label></center>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <!--<label class="font-weight-bold" for="email">Email</label>-->
                  <input type="email" name="uname" class="form-control" placeholder="Email Address">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <!--<label class="font-weight-bold" for="email">Password</label>-->
                  <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12" align="center">
                  <input type="submit" name="login" value="Login" class="btn btn-primary pill text-white px-5 py-2">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12" align="center">
				<a href="registration.php">Not Register yet !!</a>
                </div>
				<div class="col-md-12" align="center">
				<a href="forgot.php">forgot password !!</a>
                </div>
              </div>

  
            </form>
          </div>

	  
    </div>

    

    
    <footer class="site-footer">
      <div class="container">
        <div class="text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved <a href="#" target="_blank" >Shivam & VIshal</a>
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
if(isset($_POST['login']))
{
	include("connect.php");
	
	$email = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$sql = mysqli_query($con,"select * from tbl_admin where a_email='$email' and a_password='$pass'");
	if(mysqli_num_rows($sql)>0)
	{
		$_SESSION['adminemail']=$email;
		echo "<script type='text/javascript'>";
		echo "alert('Admin Login Succesfull');";
		echo "window.location.href='admin_index.php';";
		echo "</script>";
		//header("loation:admin_index.html");
	}
	else
	{
		$sql = mysqli_query($con,"select * from tbl_user where user_email='$email' and user_password='$pass'");
		
		if(mysqli_num_rows($sql)>0)
		{
			$_SESSION['useremail']=$email;
			echo "<script type='text/javascript'>";
			echo "alert('Login Succesfull');";
			echo "window.location.href='user_index.php';";
			echo "</script>";
			//header("loation:admin_index.html");

		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('invalid EMAIL And Password');";
			echo "</script>";
			session_unset();
		}
	}
	
	mysqli_close($con);
}
?>