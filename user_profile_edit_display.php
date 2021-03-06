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
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
<script>
 $(document).ready(function(){
$('#myform').on('submit',function(e) {

	$.ajax({
		url:'user_profile_edit_confirm.php',
		data:$(this).serialize(),
		type:'POST',
		success:function(data){
			console.log(data);
		alert("Changes Saved"); 
		$('#myform')[0].reset(); 
		},
		error:function(data){
			$("#error").show().fadeOut(5000);
		}
		});
e.preventDefault();
});
});
</script>
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
      *********************************************************************************************************************************************************** --><style>
/*	
	Side Navigation Menu V2, RWD
	===================
	License:
	http://goo.gl/H8ytpz
	===================
	Author: @PableraShow

 */

@charset "UTF-8";
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#000000;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 70%;
	 
  display: table;
  
  margin:0; padding:0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child {
	  color: #FB667A;
}

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
	.container td:nth-child(4),
.container th:nth-child(4) {
		  display: none;
	  }
}
</style>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Profile Details </h3>
          	<div class="row mt">
          		<div class="col-lg-12">
 <div class="col-md-12">
	                  	  
	                  	  	  
	                  	  	  <hr>
	                  	  	  <form method="POST" id="myform" action="">
		                      <table class="container">
		                      <?php if($_POST['fname']=="on")
		                      {
		                      echo "<thead>";
		                      echo "<tr>";
		                      echo "<th>";
		                      echo "First Name";
		                     echo "</th>";
		                      echo "<td>";
		                      	echo "<input type=\"text\" id=\"fname\" name=\"fname\">";
		                        echo "</td>";
		                         echo "</tr>";
		                         echo "</thead>";
		                         }
		                        ?>
		                            <?php if($_POST['lname']=="on")
		                      {
		                      echo "<thead>";
		                      echo "<tr>";
		                      echo "<th>";
		                      echo "Last Name";
		                     echo "</th>";
		                      echo "<td>";
		                      	echo "<input type=\"text\" id=\"lname\" name=\"lname\">";
		                        echo "</td>";
		                         echo "</tr>";
		                         echo "</thead>";
		                         }
		                        ?>
		                     
		                        <?php if($_POST['dob']=="on")
		                      {
		                      echo "<thead>";
		                      echo "<tr>";
		                      echo "<th>";
		                      echo "DOB";
		                     echo "</th>";
		                      echo "<td>";
		                      	echo "<input type=\"text\" id=\"dob\" name=\"dob\">";
		                        echo "</td>";
		                         echo "</tr>";
		                         echo "</thead>";
		                         }
		                        ?>
		                           <?php if($_POST['email']=="on")
		                      {
		                      echo "<thead>";
		                      echo "<tr>";
		                      echo "<th>";
		                      echo "Email";
		                     echo "</th>";
		                      echo "<td>";
		                      	echo "<input type=\"text\" id=\"email\" name=\"email\">";
		                        echo "</td>";
		                         echo "</tr>";
		                         echo "</thead>";
		                         }
		                        ?>
		                           <?php if($_POST['addr']=="on")
		                      {
		                      echo "<thead>";
		                      echo "<tr>";
		                      echo "<th>";
		                      echo "Address";
		                     echo "</th>";
		                      echo "<td>";
		                      	echo "<input type=\"text\" id=\"addr\" name=\"addr\">";
		                        echo "</td>";
		                         echo "</tr>";
		                         echo "</thead>";
		                         }
		                        ?>
		                           <?php if($_POST['phno']=="on")
		                      {
		                      echo "<thead>";
		                      echo "<tr>";
		                      echo "<th>";
		                      echo "Phone Number";
		                     echo "</th>";
		                      echo "<td>";
		                      	echo "<input type=\"text\" id=\"phno\" name=\"phno\">";
		                        echo "</td>";
		                         echo "</tr>";
		                         echo "</thead>";
		                         }
		                        ?>
		                           <?php if($_POST['pwd']=="on")
		                      {
		                      echo "<thead>";
		                      echo "<tr>";
		                      echo "<th>";
		                      echo "Password";
		                     echo "</th>";
		                      echo "<td>";
		                      	echo "<input type=\"text\" id=\"phno\" name=\"pwd\">";
		                        echo "</td>";
		                         echo "</tr>";
		                         echo "</thead>";
		                         }
		                        ?>
		                        </table>
		                        
		                      <input type="submit" id="submit" value="Submit" class="btn btn-primary">
          		</form>
			
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
