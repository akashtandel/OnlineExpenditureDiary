<?php
session_start();
error_reporting(0);
include("connect.php");
$admin_profile = $_SESSION['adminemail'];
if($admin_profile==true)
{
	
}
else
{
	echo "<script type='text/javascript'>";
	echo "window.location.href='index.php';";
	echo "</script>";
}

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
                <h2 class="mb-0 site-logo"><a href="index.php"><font color="black">Online Expenditure Dairy</font></a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li ><a href="admin_index.php"><font color="black">Home</font></a></li>
                      <li class="active"><a href="admin_user.php"><font color="black">Users</font></a></li>
                      <li><a href="admin_payment.php"><font color="black">Payments</font></a></li>
                      <li><a href="admin_feedback.php"><font color="black">Feedbacks</font></a></li>
                      <!--<li><a href="admin_report.php"><font color="black">Reports</font></a></li>-->
                      <li><a href="logout.php"><font color="black">Logout</font></a></li>
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
      
      <div class="site-blocks-cover overlay"  data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row ">
            <div class="col" data-aos="fade">
              <h2 class="caption mb-2"></h2>
			  <br><br><br><br><br>
              <!--<h1 class="">Hello Admin</h1>-->
              
            
			<div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Work</th>
				  <th>Gender</th>
                  <!--<th><font color="green">View marks</font></th>
                  <th><font color="blue">View Result</font></th>-->
                  <!--<th><font color="blue">Update</font></th>
                  <th><font color="red">Delete</font></th>-->
                </tr>
                </thead>
                <tbody>
				<?php
				$sql1=mysqli_query($con,"select * from tbl_user where status='yes'");
				while($res1=mysqli_fetch_assoc($sql1))
				{
					$id=$res1['user_id'];
					$name=$res1['user_name'];
					$email=$res1['user_email'];
					$mobile=$res1['user_mobile'];
					$work=$res1['user_work'];
					$gender=$res1['user_gender'];
				
				
				?>			
                <tr>
                  <td><?php echo $id;?></td>
                  <td><?php echo $name;?></td>
                  <td><?php echo $email;?></td>
                  <td><?php echo $mobile;?></td>
                  <td><?php echo $work;?></td>
                  <td><?php echo $gender;?></td>
                  
                 <!-- <td><a href='admin_view_marks.php?vid=<?php //echo $sid;?>&&name=<?php //echo $sname;?>'><font color="green"><u>View Marks</u></font></a></td>
                  <td><a href='admin_view_result.php?rid=<?php //echo $sid;?>'><font color="blue"><u>View Result</u></font></a></td>-->
                 <!--<td><a href='user_index.php?uid=<?php //echo $pid;?>'><font color="blue"><u>Update</u></font></a></td>
                 <td><a href='status.php?did=<?php //echo $pid;?>'><font color="red"><u>Delete</u></font></a></td>-->
                </tr>
				<?php
				}
				?>
                
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
	  </div>
          </div>
        </div>
      </div>
      </div> 
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
