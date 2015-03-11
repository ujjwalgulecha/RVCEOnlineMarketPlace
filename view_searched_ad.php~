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
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--external css-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
<script>
 $(document).ready(function(){
$('#contactbuyerform').on('submit',function(e) {

	$.ajax({
		url:'contact_buyer.php',
		data:$(this).serialize(),
		type:'POST',
		success:function(data){
			console.log(data);
		$("#success").show().fadeOut(5000); 
		$('#contactbuyerform')[0].reset(); 
		},
		error:function(data){
			$("#error").show().fadeOut(5000);
		}
		});
e.preventDefault();
});
});
</script>
  
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="magiczoom/magiczoom.css" rel="stylesheet" type="text/css" media="screen"/>
                <!-- link to magiczoom.js file -->
                <script src="magiczoom/magiczoom.js" type="text/javascript"></script>
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
              
            <!--logo start-->
            <a href="Homepage.php" class="logo"><b>RVCE ONLINE MARKETPLACE</b></a>
            <!--logo end-->
            
            </div>
            <?php  session_start();
            if(isset($_SESSION['login'])==false)
            {
            	
            	$_SESSION['check']=false;
            }
            else 
            {
            	if($_SESSION['login']==false)
            	$_SESSION['check']=false;
            	else
            	{
            		$_SESSION['check']=true;
            	}
            	
            }
            
            
            ?>
            <div class="top-menu">
            <ul class="nav pull-right top-menu">
           
            <?php
            session_start();
             if($_SESSION['check']==false)
             {
             	
             	echo "<li><a class='logout' href='registration.html'>Register</a></li>";
                echo  "<li><a class='logout' href='login.php'>Login</a></li>";
             }
             else
            {
            	$name=$_SESSION['NAME'];
              	     echo "<li><a class='logout'>$name</a></li>";
                    echo "<li><a class='logout' href='logout.php'>Logout</a></li>";
            }       	
            
            
            ?>
</ul>
            </div>
        </header>
         
      <!--header end-->
      
      <!--  **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content1">
          <section class="wrapper site-min-height">
	
          	<h3><i class="fa fa-angle-right"></i> View Ad</h3>
          	<hr>
		
		<?php

		$i=1;
		session_start();
          	$con = mysql_connect("localhost", "root", "root");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
  		$db_selected = mysql_select_db("MarketPlace",$con);
  		
  		$ad_id = $_GET['ad_id'];
  		$qry= "SELECT * FROM ad WHERE ad_id ='$ad_id'";
		$result = mysql_query($qry,$con);
  		while ($row = mysql_fetch_assoc($result))
    		{     	
    			
    			$uid=$row['user_id'];
    			
    			echo "<div style=' position: absolute;left: 100px;top: 120px;padding-left:350px;'>";
    			echo  "<div  style='background-color: lightgrey;width: 500px;height:350px;padding: 15px;border: 10px solid navy;
    			margin: 25px;'>";
    			echo "<span style='font-size:25px;font-weight:bold'>Ad Details";
    			echo "<hr>";
    			echo "<span style='font-size:20px;font-weight:bold'>Title: $row[title]";
    			echo "<br>";
    			echo "<span style='font-size:20px;font-weight:bold'>Description: $row[description]";
    			echo "<br>";
    			echo "<span style='font-size:20px;font-weight:bold'>Price: $row[price]";
    			echo "<br>";
    			echo "<span style='font-size:20px;font-weight:bold'>Owner: $row[user_id]";
    			echo "<br>";
    			echo 	 "<a href='javascript:void(0);' style='margin-right:30px;margin-top:8px;' class='vpb_general_button' onClick='vpb_show_sign_up_box();'>Contact Buyer</a>";
    			echo 	 "<a href='javascript:void(0);' style='margin-left:27px;margin-top:8px;' class='vpb_general_button' onClick='vpb_show_login_box();'>View Buyer Profile</a>";
    			echo "<br>";echo "<br>";
    			echo "</div>";
    			echo "</div>";
    			$qry2= "SELECT * FROM image WHERE ad_id='$ad_id'";
    			

    		echo "<a href='assets/img/defaultimg.png' class='MagicZoom' id='Zoomer' rel='selectors-effect-speed: 600'><img src='assets/img/defaultimg.png'/></a> <br/>";	
		$result2=mysql_query($qry2,$con);
		
		if($result2) {
		
				 while ($row2=mysql_fetch_row($result2))
    				{
				     	      echo "<a href='$row2[0]' rel='zoom-id:Zoomer;zoom-width:250px;zoom-height:250px;' rev='$row2[0]' title='$row[title]'><img width='100px' height='100px' src='$row2[0]'/></a>";
					
		                        
				}
  				
			}
			
			}
			
  	
  			$qry= "SELECT * FROM User WHERE uid ='$uid'";
  			$result = mysql_query($qry,$con);
  			while ($row = mysql_fetch_assoc($result))
    			{    
    				$_SESSION['adposteruser']=$row['uid'];
    			$_SESSION['upvote']=$row['upvote'];
    			$_SESSION['downvote']=$row['downvote'];
  				$_SESSION['adnumber']=$row['uphno'];
  				$_SESSION['ademail']=$row['uemail'];
  				
  			}
		?>
	


 
<div id="vpb_pop_up_background"></div>
<!-- Login Box Starts Here -->
<div id="vpb_signup_pop_up_box" class="vpb_signup_pop_up_box">
<div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:bold;">Contact Buyer</div><br clear="all">
<form method="POST" action="" id="contactbuyerform">
<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Title:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="title" name="title" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Message: </div>
<div style="width:300px;float:left;" align="left"> <textarea name="message" id="message" class="form-control" cols="100" rows="5" ... required></textarea></div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">

 <input type="submit" id="submit" class="vpb_general_button1" value="Contact">
      <a href="javascript:void(0);" class="vpb_general_button1" onClick="vpb_hide_popup_boxes();">Cancel</a>
     </div>

<br clear="all"><br clear="all">
<span id="success" style="display:none; color:#0C0">Your Email Has Been Sent!</span>
</form>
</div>

<div id="vpb_pop_up_background"></div>
<!-- Login Box Starts Here -->
<div id="vpb_login_pop_up_box" class="vpb_login_pop_up_box">
<div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:bold;">Details<br><br><?php session_start();echo $_SESSION['adposteruser']; ?></div><br clear="all">


<div style="position:absolute;width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">
<img src="thumbsup.jpeg" width="100px" height="100px">
<?php session_start();echo "<div style='font-family:Verdana, Geneva, sans-serif; font-size:16px;text-align:center; font-weight:bold;'>";echo $_SESSION['upvote']; echo "</div>"?>
</div>
<div style="width:100px; padding-top:10px;margin-left:150px;float:left;" align="left">
<img src="thumbsdown.jpg" width="100px" height="100px">
<?php session_start();echo "<div style='font-family:Verdana, Geneva, sans-serif;text-align:center; font-size:16px; font-weight:bold;'>";echo $_SESSION['downvote']; echo "</div>"?>
</div>

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">

 
      <a href="javascript:void(0);" class="vpb_general_button1" onClick="vpb_hide_popup_boxes();">Ok</a>
     </div>

<br clear="all"><br clear="all">

</div>

                 
                 </section>
      </section>

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
$(document).ready(function() 
{	

	$("#vpb_pop_up_background").click(function()
	{
		
		$("#vpb_signup_pop_up_box").hide(); //Hides the sign-up box when clicked outside the form
		$("#vpb_login_pop_up_box").hide();
		$("#vpb_pop_up_background").fadeOut("slow");
	});
});

//This function displays the sign-up box when called
function vpb_show_sign_up_box()
{
	$("#vpb_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_signup_pop_up_box").fadeIn('fast');
	window.scroll(0,0);
}

function vpb_show_login_box()
{
	$("#vpb_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_login_pop_up_box").fadeIn('fast');
	window.scroll(0,0);
}

//This function hides both the Sign-up Box and Login Box when called
function vpb_hide_popup_boxes()
{
	$("#vpb_signup_pop_up_box").hide(); //Hides the sign-up box when clicked outside the form
	$("#vpb_login_pop_up_box").hide(); 
	$("#vpb_pop_up_background").fadeOut("slow");
}
 


 
  </script>
   <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

	
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

  </body>
</html>
