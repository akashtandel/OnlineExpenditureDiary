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



$did=$_GET['did'];
if($did==true)
{
$res3 = mysqli_query($con,"update tbl_payment set status='no' where p_id='$did'");
if($res3=="1")
{
	echo "<script type='text/javascript'>";
	echo "alert('Payment Deleted');";
	echo "window.location.href='status.php';";
	echo "</script>";
}
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
                <h2 class="mb-0 site-logo"><a href="index.php">Online Expenditure Dairy</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="user_index.php">Home</a></li>
					  <li><a href="profile.php">Profile</a></li>
                      <!--<li><a href="balance.php">balance</a></li>-->
                      <li  class="active"><a href="status.php">Status</a></li>
                      <li><a href="feedback.php">feedback</a></li>
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
              <!--<h2 class="caption mb-2">Mind can change everything</h2>-->
              <h1 class="">Online Expenditure Dairy</h1>
              
            </div>
          </div>
        </div>
      </div>
      </div> 
    </div>

		
         <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Payment Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!--<th>Id</th>-->
                  <th>Payment Type</th>
                  <th>Payment Name</th>
                  <th>Money</th>
                  <th>Describtion</th>
				  <th>Date</th>
                  <!--<th><font color="green">View marks</font></th>
                  <th><font color="blue">View Result</font></th>-->
                  <th><font color="blue">Update</font></th>
                  <th><font color="red">Delete</font></th>
                </tr>
                </thead>
                <tbody>
				<?php
				$credit=0;
				$debit=0;
				$money=0;
				$color="";
				$sql1=mysqli_query($con,"select * from tbl_payment where user_id='$id' and status='yes'");
				while($res1=mysqli_fetch_assoc($sql1))
				{
					$ptype=$res1['p_type'];
					$pmoney=$res1['p_money'];
					if($ptype=='credit')
					{
						$color="green";
						$credit=$credit+$pmoney;
					}
					//echo $credit;
					if($ptype=='debit')
					{
						$color="red";
						$debit=$debit+$pmoney;
					}
					$money=$credit-$debit;
					
					$pid=$res1['p_id'];
					$uid=$res1['user_id'];
					$ptype=$res1['p_type'];
					$pname=$res1['p_name'];
					$pmoney=$res1['p_money'];
					$pdes=$res1['p_des'];
					$pdate=$res1['p_date'];
				
				include("email.php");
				?>			
                <tr>
                  <!--<td><?php //echo $pid;?></td>-->
                  <td><?php echo $ptype;?></td>
                  <td><?php echo $pname;?></td>
                  <td><font color="<?php echo $color;?>"><?php echo $pmoney;?></font></td>
                  <td><?php echo $pdes;?></td>
                  <td><?php echo $pdate;?></td>
                  
                 <!-- <td><a href='admin_view_marks.php?vid=<?php //echo $sid;?>&&name=<?php //echo $sname;?>'><font color="green"><u>View Marks</u></font></a></td>
                  <td><a href='admin_view_result.php?rid=<?php //echo $sid;?>'><font color="blue"><u>View Result</u></font></a></td>-->
                 <td><a href='user_index.php?uid=<?php echo $pid;?>'><font color="blue"><u>Update</u></font></a></td>
                 <td><a href='status.php?did=<?php echo $pid;?>'><font color="red"><u>Delete</u></font></a></td>
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
 
    
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

    