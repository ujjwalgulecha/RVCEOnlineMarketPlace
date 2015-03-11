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
   <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/jquery.js"></script>
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
            
                    <!-- settings end -->
                  
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

      <!--main content start-->
      <section id="main-content1">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Ads(Click on the Ad to View) </h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		 <table class="table">
          		 
<?php

session_start();
          	$con = mysql_connect("localhost", "root", "root");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		$i=1;
		$db_selected = mysql_select_db("MarketPlace",$con);
		if($_POST['category']=="ALL" && $_POST['keyword']==null)
		{
			$qry= "SELECT * FROM ad";
			$result = mysql_query($qry,$con);
		}
		else if($_POST['category']=="ALL")
		{
			$qry= "SELECT * FROM ad WHERE tags LIKE '%$_POST[keyword]%' OR title LIKE '%$_POST[keyword]%' OR description LIKE '%$_POST[keyword]%'";
			$result = mysql_query($qry,$con);
		}
		else
		{
		$qry= "SELECT * FROM ad WHERE (tags LIKE '%$_POST[keyword]%' OR title LIKE '%$_POST[keyword]%' OR description LIKE '%$_POST[keyword]%') AND category = '$_POST[category]'";
		$result = mysql_query($qry,$con);
		}
          	while ($row = mysql_fetch_assoc($result))
    		{     	
    		echo "<form action='view_searched_ad.php' method='GET'>";
    			
    			echo "<tr>";
		     	$title = $row['title'];
		     	$cost=$row['price'];
		     	$ad_id=$row['ad_id'];
		     
		     	echo "<span style='font-size:20px;font-weight:bold'>$i."."Title: $title</div>";
		     	$i++;
		     	echo "<br>";
		     	echo "<span style='font-size:20px;font-weight:bold'> Price: $cost</div>";
		     	 
			echo "<br>";
		$qry2= "SELECT * FROM image WHERE ad_id='$ad_id'";
		$result2=mysql_query($qry2,$con);	
		echo "<input type='hidden' name='ad_id' value='$ad_id'>";
		echo "<div class='row mt'>";
		if($row2=mysql_fetch_array($result2)) 
		{
			echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 desc'>";
				     	echo "<div class='project-wrapper'>";		
		                    	echo "<div class='project'>";
		                        //echo "<div class='photo-wrapper'>";
		                        echo  "<div class='photo'>";
		                        
			echo "<input type='image' src='$row2[0]' href='$row2[0]'class ='img-responsive' alt='Submit' width='410' height='300'>";
		     	
		     	echo "</div>";
		                       echo "<div class='overlay'></div>";
		                        echo "</div>";
		                  echo "</div>";
		               		 echo "</div>";
					echo "</div>";
					
		     	echo "</form>";
		}
		echo "</div>";
		echo "</tr>";
		echo "<br>";
		echo "<br>";
  				
		}
		echo "</table>";
  				mysqli_free_result($result);
			
			mysqli_close($con);

?>
          		</div>
          	</div>
			
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
      <!-- js placed at the end of the document so the pages load faster -->
	<script src="assets/js/fancybox/jquery.fancybox.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
