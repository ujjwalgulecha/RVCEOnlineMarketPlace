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

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
 <script src="js/dropzone.min.js"></script>
 <script src="js/custom_dropzone.js"></script> 
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

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
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
     <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="user_profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
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
                      <a href="contact_us.php">
                          <span>Contact Us</span>
                      </a>
                  </li>
                  
                   <li class="mt">
                      <a href="user_settings.html">
                          <span>Settings</span>
                      </a>
                  </li>
                  
                  

                 
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>View Own Ads</h3>
          	<?php
          	
          	session_start();
          	$con = mysql_connect("localhost", "root", "root");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		$i=1;
		$db_selected = mysql_select_db("MarketPlace",$con);
		$qry= "SELECT * FROM ad WHERE user_id='$_SESSION[username]'";
		$result = mysql_query($qry,$con);
          	while ($row = mysql_fetch_assoc($result))
    		{     	
    		
    			
		     	$title = $row['title'];
		     	$des= $row['description'];
		     	$ad_id=$row['ad_id'];
		     	$category=$row['category'];
		     	$tags=$row['tags'];
		     	$cost=$row['price'];
		     	echo "<span style='font-size:20px;font-weight:bold'>$i."."Title: $title</div>";
			echo "<br>";
			echo "<span style='font-size:20px;font-weight:bold'>Description: $des</div>";
			echo "<br>";
			echo "<span style='font-size:20px;font-weight:bold'>Category: $category</div>";
			echo "<br>";
			echo "<span style='font-size:20px;font-weight:bold'>Price: $cost</div>";
			echo "<br>"; 
			echo "<span style='font-size:20px;font-weight:bold'>Tags: $tags</div>";
			echo "<br>"; 
	$i++;
		$qry2= "SELECT * FROM image WHERE ad_id='$ad_id'";
		$result2=mysql_query($qry2,$con);
		if($result2) {
				 while ($row2=mysql_fetch_row($result2))
    				{
				     	
				     	echo "<img src='$row2[0]' width='250' height='250'>";
				     	echo "&nbsp";
				}
  				
			}
			echo "<input type='hidden' id='ad_id' value='$ad_id'>";
			echo "<input value='Delete' type='button' onclick='xyz();'"; 

			echo "<br>";
			echo "<br>";
			}
  				mysqli_free_result($result);
			
			

			mysqli_close($con);
		
?>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	
<script>
function xyz(){
var str= document.getElementById("ad_id").value;

  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("main-content").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","deletead.php?id="+str,true);
  xmlhttp.send();
}
</script>
</script>
          	
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
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    <script src="jquery.js"></script>
	<script src="jquery.validate.js"></script>

  </body>
</html>
