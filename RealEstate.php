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
     <link href="animate.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css"> 
    <!--external css-->

    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
  
<link rel="stylesheet" type="text/css" href="styles/style.css" />
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
         <header class="header black-bg">
              
            <!--logo start-->
            <a href="Homepage.php#" class="logo"><b>RVCE ONLINE MARKETPLACE</b></a>
            <!--logo end-->
             <div style=" position: absolute;
    left: 100px;
    top: 20px;padding-left:430px;font-size:25px;font-weight:bold"> Real Estate </div>
            </div>
                <div class="top-menu">
            <ul class="nav pull-right top-menu">
            <li id="header_inbox_bar">
                        
                           <p data-toggle="dropdown"  style='margin-right:30px;margin-top:8px;' class='vpb_general_button'> Categories </p>
                            
                        
                        <ul class="dropdown-menu extended inbox">
                            
                            <li>
                                <p class="green"> &nbsp;Categories</p>
                            </li>
                            <li>
                                <a href="index1.php">
                                  
                                    <span class="subject">
                                       Books and Notes
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index6.php">
                                  
                                    <span class="subject">
                                       Electronics and Computers
                                    </span>
                                </a>
                            </li>
                           <li>
                                <a href="index5.php">
                                  
                                    <span class="subject">
                                       Furniture
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index4.php">
                                  
                                    <span class="subject">
                                       Mobile Phones and Tablets
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index3.php">
                                  
                                    <span class="subject">
                                       Real Estate
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index2.php">
                                  
                                    <span class="subject">
                                       Vehicles
                                    </span>
                                </a>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
            
            
          <!--  <a href='javascript:void(0);' style='margin-right:30px;margin-top:8px;' class='vpb_general_button' onClick='vpb_show_sign_up_box();'>Categories</a>-->
            <?php
            session_start();
		echo "<a href='javascript:void(0);' style='margin-right:30px;margin-top:8px;' class='vpb_general_button' onClick='vpb_show_search_box();'>Search</a>";
             if($_SESSION['check']==false)
             {
             	
          	echo "<a href='javascript:void(0);' style='margin-right:30px;margin-top:8px;' class='vpb_general_button' onClick='vpb_show_sign_up_box();'>Sign Up</a>";
             	echo "<a href='javascript:void(0);' style='margin-right:30px;margin-top:8px;'class='vpb_general_button' onClick='vpb_show_login_box();'>Login</a>";
             	//echo "<li><a  href='javascript:void(0);' class='vpb_general_button' onClick='vpb_show_login_box()'>Register</a></li>";
                //echo  "<li><a id='onclick' href='login.php'>Login</a></li>";
             }
             else
            {
            	$name=$_SESSION['NAME'];
            	
              	     echo "<a style='margin-right:30px;margin-top:8px;' class='vpb_general_button' href='User_Welcome.php'>$name</a>";
                    echo "<a style='margin-right:30px;margin-top:8px;' class='vpb_general_button' href='logout.php'>Logout</a>";
            }       	
            
            
            ?>
            </div>
        </header>
        <section id="main-contentlatest">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Ads(Click on the Ad to View) </h3>
      
<?php
//open database

//include our awesome pagination
//class (library)
include 'libs/ps_pagination.php';

session_start();
          	$con = mysql_connect("localhost", "root", "root");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		$i=1;
		$db_selected = mysql_select_db("MarketPlace",$con);
		$qry= "SELECT * FROM ad WHERE category ='Real Estate'";
		$pager = new PS_Pagination( $con, $qry, 2, 4, null );
		$rs = $pager->paginate(); 
		 $num = mysql_num_rows( $rs );

if($num >= 1 ){  
		
		
          	while ($row = mysql_fetch_assoc($rs))
    		{     	
    		echo "<div class='animated bounceInLeft'>";
    		echo "<form action='view_searched_ad.php' method='GET'>";
    			
    			
		     	echo "<tr>";
		     	$title = $row['title'];
		     	$cost=$row['price'];
		     	$ad_id=$row['ad_id'];
		     
		     	echo "<span style='font-size:20px;font-weight:bold'>Title: $title";
		     	
		     	echo "<br>";
		     	echo "<span style='font-size:20px;font-weight:bold'> Price: $cost";
		     	 
			echo "<br>";
		$qry2= "SELECT * FROM image WHERE ad_id='$ad_id'";
		$result2=mysql_query($qry2,$con);	
		echo "<input type='hidden' name='ad_id' value='$ad_id'>";
		
		if($row2=mysql_fetch_array($result2)) 
		{
			
		                        
			echo "<input type='image' src='$row2[0]' href='$row2[0]' width='250px' height='150px'>";
		     	
		     	
					
		     	echo "</form>";
		}
		echo "</div>";
		echo "</tr>";
		echo "<br>";
		
  			echo "</div>";	
		}
		}
  				mysqli_free_result($result);
			
			mysqli_close($con);


//our pagination class will render new
//recordset (search results now are limited
//for pagination)


//page-nav class to control
//the appearance of our page 
//number navigation
echo "<div class='page-nav'>";
	//display our page number navigation
	echo $pager->renderFullNav();
echo "</div>";

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
   <script src="assets/js/jjquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
          	
