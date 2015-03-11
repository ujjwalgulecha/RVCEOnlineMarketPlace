<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>RVCE ONLINE MARKETPLACE</title>
<script src="jquery-2.1.1.min.js"></script>
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
if($_SESSION['login']==false || isset($_SESSION['login'])==false)
{
	echo '<meta http-equiv="refresh" content="0;URL=nolog.php">';
}
$con = mysqli_connect("localhost", "root", "root","MarketPlace");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$qry= "SELECT * FROM User WHERE uid='$_SESSION[uid]'";
$result=mysqli_query($con,$qry);
$row = mysqli_fetch_array($result);

$fname = $row['ufname'];
$fname = $fname . ' ';
$fname = $fname . $row['ulname'];
$_SESSION['NAME'] = $fname;


$result = mysqli_query($con, "SELECT * FROM ad ORDER BY time DESC LIMIT 1;");

$row = mysqli_fetch_array($result);

$_SESSION['ad_id'] = $row['ad_id'];
$_SESSION['title']= $row['title'];
$_SESSION['category'] = $row['category'];
$ad_id=$_SESSION['ad_id'];
$qry="SELECT * FROM image where ad_id='$ad_id'";
$result = mysqli_query($con,$qry);


$row = mysqli_fetch_array($result);
$_SESSION['urllink']=$row['img_id'];

?>
<script>
$(document).ready(function(){
blinkFont();
});

function blinkFont()
{
document.getElementById("blink").style.color="red"
document.getElementById("blink").style.background="black"
setTimeout("setblinkFont()",500)
}

function setblinkFont()
{
document.getElementById("blink").style.color="black"
document.getElementById("blink").style.background="red"
setTimeout("blinkFont()",500)
}
</script>
<style>
#blink {
text-align:center;
background:#000000;
color:#F00;
margin: 0;
padding:5px;
}

#blink span {
font-size:2em;
font-weight:bold;
display:block;
}
</style>
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
                    <li><a class="logout" href="logout.php">Logout</a></li>
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
                          <li><a  href="Homepage.php">Buy</a></li>
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
          	<h3>
          	
<script language="JavaScript1.2">

/*
Neon Lights Text
By JavaScript Kit (http://javascriptkit.com)
Over 400+ free scripts here!
*/

var message="Welcome to RVCE ONLINE MARKETPLACE!"
var neonbasecolor="black"
var neontextcolor="red"
var flashspeed=100  //in milliseconds

///No need to edit below this line/////

var n=0
if (document.all||document.getElementById){
document.write('')
for (m=0;m<message.length;m++)
document.write('<span style="font-size:50px;" id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}

function neon(){

//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()


</script>


</h3>
          	<div class="row mt">
          	<div class="alert alert-info" style="width:50%;">
          	
          	<b>
          	
          	RVCE ONLINE MARKETPLACE is the next generation of free online market to buy and/or sell goods for RVCE stakeholders.
		<br/><br/>
		RVCE ONLINE MARKETPLACE provides a simple solution to the complications involved in selling, buying, trading, discussing, organizing, and meeting people near you, wherever you may reside.
		<br/><br/>
		On RVCE ONLINE MARKETPLACE you can:
		<br/>
		<br/>
    		1.Easily design rich ads with pictures.<br/>
	        2.Control your selling, buying, and community activity in My Account<br/>
	    	3.Access the site from your mobile phone<br/>
	   <br/>
<br/><br/><br/><br/><br/>
		RVCE ONLINE MARKETPLACE was founded in October 2014 and is privately held.
		</b>
		
		</div>
		
          		<div style=" position: absolute;
    left: 100px;
    top: 120px;padding-left:650px;">
    <div  style="
    background-color: lightgrey;
    width: 500px;
    height:530px;
    padding: 15px;
    border: 10px solid navy;
    margin: 25px;
">
		<?php 
		echo "<div style='color:#ffffff' id='idee'></div>";
echo "<h2 style='margin-top:4px;'>";echo "<div id='blink'>";echo "GRAB IT!!"; echo"</div>"; echo "</h4>";

		session_start(); 
echo "<h3>";echo $_SESSION['title']; echo "</h3>";

echo "<h4>";echo $_SESSION['category']; echo "</h4>";

echo "<a href='view_searched_ad.php?ad_id=$_SESSION[ad_id]'><img src='$_SESSION[urllink]'/></a> <br/>";	
echo "<br/>";
?>
</div>		</div>
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

  </body>
</html>
