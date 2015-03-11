<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>RVCE ONLINE MARKETPLACE</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php
session_start();
$con = mysqli_connect("localhost", "root", "root","MarketPlace");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$qry= "SELECT * FROM User WHERE uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
$result=mysqli_query($con,$qry);
$row = mysqli_fetch_array($result);
$fname = $row['ufname'];
$fname = $fname . ' ';
$fname = $fname . $row['ulname'];
$_SESSION['NAME'] = $fname;

?>
  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="Homepage.php" class="logo"><b>RVCE ONLINE MARKETPLACE</b></a>
            <!--logo end-->
            
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="User_Welcome.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php session_start(); echo $_SESSION['NAME']; ?></h5>
              	  	
              	  	</li>
			 <li class="mt">
                      <a href="user_profile.php">
                          <span>Profile</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <span>Ads</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="ad_general.php">Buy</a></li>
                          <li><a  href="ad_sell.php">Sell</a></li>
                          <li><a  href="ad_general.php">Manage</a></li>
                          <li><a  href="ad_confirm.php">Confirm</a></li>
                      </ul>
                  
                  
                   <li class="mt">
                      <a href="contact_us.html">
                          <span>Contact Us</span>
                      </a>
                  </li>
                  
                   <li class="mt">
                      <a href="user_settings.php">
                          <span>Settings</span>
                      </a>
                  </li>
                  
                  

                 
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Profile Details </h3>
          	
          		<?php
			$con=mysqli_connect("localhost","root","root","MarketPlace");
			if (mysqli_connect_errno()) {
 			 echo "Failed to connect to MySQL: " . mysqli_connect_error();}
  
          		session_start();
          		
		                     if(isset($_POST['fname']))
		                      {
		                     	 $fname = mysqli_real_escape_string($con, $_POST['fname']);
		                     	 $qry="UPDATE User SET ufname='$fname' where uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
		                     	 $result=mysqli_query($con,$qry);
		                     	 if(!$result)echo"no";
		                     	
		                      }
		                   
		                      if(isset($_POST['lname']))
		                      {
		                     	 $lname = mysqli_real_escape_string($con, $_POST['lname']);
		                     	 
		                     	 $qry="UPDATE User SET ulname='$lname' where uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
		                     	 $result=mysqli_query($con,$qry);
		                     	 

		                      }
		                     	 
		                     	 if(isset($_POST['dob']))
		                      {
		                     	 $dob = mysqli_real_escape_string($con, $_POST['dob']);
		                     	 $qry="UPDATE User SET udob='$dob' where uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
		                     	 $result=mysqli_query($con,$qry);
		                     	
		                      }
		                     	 
		                     	 if(isset($_POST['email']))
		                      {
		                     	 $email = mysqli_real_escape_string($con, $_POST['email']);
		                     	 $qry="UPDATE User SET uemail='$email' where uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
		                     	 $result=mysqli_query($con,$qry);
		                      }
		                     	 
		                     	 if(isset($_POST['addr']))
		                      {
		                     	 $addr = mysqli_real_escape_string($con, $_POST['addr']);
		                     	 $qry="UPDATE User SET uaddr='$addr' where uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
		                     	 $result=mysqli_query($con,$qry);
		                      }
		                     	 
		                     	 if(isset($_POST['phno']))
		                      {
		                     	 $phno = mysqli_real_escape_string($con, $_POST['phno']);
		                     	 $qry="UPDATE User SET uphno='$phno' where uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
		                     	 $result=mysqli_query($con,$qry);
		                      }
		                     	
		                     	if(isset($_POST['pwd']))
		                      {
		                     	 $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
		                     	 $qry="UPDATE User SET upwd='$pwd' where uid='$_SESSION[uid]' AND upwd='$_SESSION[pwd]'";
		                     	 $result=mysqli_query($con,$qry);
		                      }
		                     	  

		                        ?>
		                        
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
               2014 Charu|Ehab|Rakesh|Ujjwal
              <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              echo "<a href=$actual_link class='go-top'>";?>
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
