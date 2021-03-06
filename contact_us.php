<!DOCTYPE html>
<html lang="en">
  <head>
    
<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>RVCE ONLINE MARKETPLACE</title>
<link href="animate.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="jquery-2.1.1.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
 $(document).ready(function(){
$('#contact').on('submit',function(e) {

	$.ajax({
		url:'contact_sent.php',
		data:$(this).serialize(),
		type:'POST',
		success:function(data){
			console.log(data);
		alert("We Have Recieved Your Query");
		$('#contact')[0].reset(); 
		},
		error:function(data){
			$("#error").show().fadeOut(5000);
		}
		});
e.preventDefault();
});
});
</script>
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
      <style>
      /* #### Dark Matter #### */
.dark-matter {
    margin-left: auto;
    margin-right: auto;
    max-width: 500px;
    background: #555;
    padding: 20px 30px 20px 30px;
    font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #D3D3D3;
    text-shadow: 1px 1px 1px #444;
    border: none;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.dark-matter h1 {
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom: 1px solid #444;
    margin: -10px -30px 30px -30px;
}
.dark-matter h1>span {
    display: block;
    font-size: 11px;
}
.dark-matter label {
    display: block;
    margin: 0px 0px 5px;
}
.dark-matter label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    font-weight: bold;
}
.dark-matter input[type="text"], .dark-matter input[type="email"], .dark-matter textarea, .dark-matter select {
    border: none;
    color: #525252;
    height: 25px;
    line-height:15px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 5px 0px 5px 5px;
    width: 70%;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    background: #DFDFDF;
}
.dark-matter select {
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    appearance:none;
    -webkit-appearance:none;
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
    color: #525252;
    line-height: 25px;
}
.dark-matter textarea{
    height:100px;
    padding: 5px 0px 0px 5px;
    width: 70%;
}
.dark-matter .button {
    background: #999;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #fff;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    text-shadow: 1px 1px 1px #FFE477;
    font-weight: bold;
    box-shadow: 1px 1px 1px #3D3D3D;
    -webkit-box-shadow:1px 1px 1px #3D3D3D;
    -moz-box-shadow:1px 1px 1px #3D3D3D;
}

.dark-matter .button:hover {
    color: #333;
    background-color: #EBEBEB;
}
      </style>
      <!--main content start-->
      <section id="main-content2">
          <section class="wrapper">
          	
          	<div class="animated bounce">
          	<!-- BASIC FORM ELELEMNTS -->
          	<span style="margin-left:50px;">
                      <form class="dark-matter" name="contact" id="contact" method="POST" action="">
                      <h1><i></i>Contact Us</h1>
                       	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Title</label>
                              <div class="col-sm-10">
                              <input type="text" id="title" name="title" class="form-control" required>

                              </div>
                              </div>
                          
                                  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" required>Message</label>
				<div class="col-sm-10">
                              <textarea name="message" id="message" class="form-control" cols="100" rows="5" ... required></textarea>
                          
                          </div>
                          </div>
                          
                          
			<input type="submit" value="Send" class="button">

                      </form>
                      </span>
                
          	
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
	  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
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
	<script src="assets/js/form-component.js"></script>    
    <script src="jquery.js"></script>
	<script src="jquery.validate.js"></script>

  </body>
</html>
