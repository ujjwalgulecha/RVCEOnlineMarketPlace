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
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="animate.css" rel="stylesheet" type="text/css">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="business-casual.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>


function animationHover(element, animation){
    element = $(element);
   
            element.addClass('animated ' + animation);        
        }      


$(document).ready(function(){
    $('#logo').each(function() {
        animationHover(this, 'bounceOutLeft');
    });
});



 $(document).ready(function(){
$('#registrationform').on('submit',function(e) {

	$.ajax({
		url:'registration_confirm_enter.php',
		data:$(this).serialize(),
		type:'POST',
		success:function(data){
			console.log(data);
		alert("You have been registered"); 
		$('#registrationform')[0].reset(); 
		},
		error:function(data){
			$("#error").show().fadeOut(5000);
		}
		});
e.preventDefault();
});
});
</script>
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
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
      *********************************************************************************************************************************************************** 
->
      <!--header start-->
      <header class="header black-bg">
              
            <!--logo start-->
            <a href="Homepage.php#" class="logo"><b><div class="animated fadeIn">RVCE ONLINE MARKETPLACE</div></b></a>
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
   <div id="vpb_pop_up_background"></div>

    <div id="vpb_signup_pop_up_box">
    <div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:20px; font-weight:bold;">Login</div>
     <div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:bold;"></div>
                <form method="POST" action="" id="registrationform">
                 <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">First Name:</span></div>

<div style="width:300px;float:left;" align="left"><input placeholder="First Name" class="vpb_textAreaBoxInputs" onsubmit="checkfname();" type="text" id="fname" name="fname" ><span class="help-block" id="checkfname"></span></div><br clear="all">
              
                        <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">Last Name:</span></div>

<div style="width:300px;float:left;" align="left"><input type="text" placeholder="Surname" class="vpb_textAreaBoxInputs" id="lname" onsubmit="checklname()" name="lname" ><span class="help-block" id="checklname"></span></div><br clear="all">


          <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">Date of Birth:</span></div>
<div style="width:300px;float:left;" align="left"><input placeholder="DD-MM-YYYY" onsubmit="checkdob()" class="vpb_textAreaBoxInputs" type="text" id="dob" name="dob" ><span class="help-block" id="checkdob"></span></div><br clear="all">
          <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">Email:</span></div>

<div style="width:300px;float:left;" align="left"><input type="text" class="vpb_textAreaBoxInputs" onsubmit="checkemail();" id="email" name="email"><span class="help-block" id="checkemail"></div><br clear="all">
          <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">Address:</span></div>
<div style="width:300px;float:left;" align="left"><input onsubmit="checkaddr()" class="vpb_textAreaBoxInputs" type="text" id="addr" name="addr" ><span class="help-block" id="checkaddr"></div><br clear="all">
<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">Ph Number:</span></div>
<div style="width:300px;float:left;" align="left"><input  onsubmit="checkphno();" placeholder="10 Digit Number" class="vpb_textAreaBoxInputs" type="text" id="phno" name="phno" ><span class="help-block" id="checkphno"></div><br clear="all">

                       <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">Username:</span></div>
<div style="width:300px;float:left;" align="left"><input onsubmit="checkuid()" class="vpb_textAreaBoxInputs" type="text" id="uid" name="uid" ><span class="help-block" id="checkuid"></div><br clear="all">

        <div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left"><span style="font-weight: bold;font-size:12px;">Password:</span></div>
<div style="width:300px;float:left;" align="left"><input onsubmit="checkpwd()" class="vpb_textAreaBoxInputs" type="password" id="pwd" name="pwd" ><span class="help-block" id="checkpwd"></div><br clear="all">

               
      <input type="submit"  class="vpb_general_button1" value="Register">
      <a href="javascript:void(0);" class="vpb_general_button1" onClick="vpb_hide_popup_boxes();">Cancel</a>
     </div>

<br clear="all"><br clear="all">
<span id="success" style="display:none; color:#0C0">You Have Successfully Been Registered</span>
</form>
</div>

<!-- Sign Up Box Ends Here -->







<div id="vpb_pop_up_background"></div>
<!-- Login Box Starts Here -->
<div id="vpb_login_pop_up_box" class="vpb_login_pop_up_box">
<div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:bold;">Login</div><br clear="all">
<form method="POST" action="login_check.php" id="loginform">
<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Your Username:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="uid" name="uid" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Your Password:</div>
<div style="width:300px;float:left;" align="left"><input type="password" id="pwd" name="pwd"  class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">

 <input type="submit"  class="vpb_general_button1" value="Login">
      <a href="javascript:void(0);" class="vpb_general_button1" onClick="vpb_hide_popup_boxes();">Cancel</a>
     </div>

<br clear="all"><br clear="all">
</form>
</div>

<div id="vpb_pop_up_background"></div>

<!-- Login Box Starts Here -->
<div id="vpb_search_box" class="vpb_search_box">
<div align="left" style="font-family:Verdana, Geneva, sans-serif; font-size:16px; font-weight:bold;">Search</div><br clear="all">
<form method="POST" action="search.php" id="searchform">
<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Keyword:</div>
<div style="width:300px;float:left;" align="left"><input placeholder="Search for an item" type="text" id="keyword" name="keyword" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">Category:</div>
<div style="width:300px;float:left;" align="left"><select class="vpb_textAreaBoxInputs" name="category">
						   <option value="ALL">All</option>
						  <option value="Books and Notes">Books and Notes</option>
						  <option value="Electronics and Computers">Electronics and Computers</option>
						  <option value="Furniture">Furniture</option>
						  <option value="Mobile Phones and Tablets">Mobile Phones and Tablets</option>
						  <option value="Real Estate">Real Estate</option>
						  <option value="Vehicles">Vehicles</option>
						</select></div><br clear="all"><br clear="all">

<div style="width:100px; padding-top:10px;margin-left:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">

 <input type="submit"  class="vpb_general_button1" value="Search">
      <a href="javascript:void(0);" class="vpb_general_button1" onClick="vpb_hide_popup_boxes();">Cancel</a>
     </div>

<br clear="all"><br clear="all">
</form>
</div>



      <!--header end-->
      
      <!-- 
        **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
      <!--main content start-->
      <section id="main-content1">
          <section class="wrapper">

<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
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
document.write('<span style="font-size:40px;" id="neonlight'+m+'">'+message.charAt(m)+'</span>')
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
<div class="animated zoomIn">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/book1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/bike1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/furniture1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/house1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/laptop1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/mobile1.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                        
                    </div>
 
		<b>
          	<br/>
          	
          	RVCE ONLINE MARKETPLACE is the next generation of free online market to buy and/or sell goods for RVCE stakeholders.
		<br/><br/>
		
		Please check out the latest ads in various categories like Mobile Phones, Vehicles, Books !

			
          			
          		
          </section>
      </section>
</div>
		<br/><br/>
				
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 Charu|Ehab|Rakesh|Ujjwal
              <a href="Homepage.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
	
<script>

 var regex = /^[a-zA-Z ]*$/;
	function checkfname()
	{
	 var fname = $("#fname").val();
	
 
	if(!regex.test(fname)) {
  
  	 document.getElementById('fname').style.borderColor = "red";
	  //$("#checkfname").html("First Name can have only letters");
	alert("First Name can have only letters");
	return false;
	}
	else
	{
		 document.getElementById('fname').style.borderColor = "green";
		$("#checkfname").html(" ");
		return true;
	}
	}
	$(document).ready(function () {
   $("#fname").focusout(checkfname);
});
	function checklname()
	{
	 var lname = $("#lname").val();
	
 
	if(!regex.test(lname)) {
  
  	 document.getElementById('lname').style.borderColor = "red";
	//document.getElementById("#fname")style.borderColor = "red";
  alert("Last Name can have only letters");
	return false;
	
	}
	else
	{
		 document.getElementById('lname').style.borderColor = "green";
		$("#checklname").html(" ");
		return true;
	}
	}
	$(document).ready(function () {
   $("#lname").focusout(checklname);
});


function checkemail() {

    var email = $("#email").val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

 	
    if (!filter.test(email)) {
    document.getElementById('email').style.borderColor = "red";
	
  alert("Wrong Email Syntax");
  return false;
 }
 else 
 {

 	document.getElementById('email').style.borderColor = "green";
 	$("#checkemail").html(" ");
 	
 return true;
 }
}

$(document).ready(function () {
   $("#email").focusout(checkemail);
});
function checkdob()
{
	
		document.getElementById('dob').style.borderColor = "green";
		return true;
 }
	$(document).ready(function () {
   $("#dob").focusout(checkdob);
});
function checkaddr()
	{
	 document.getElementById('addr').style.borderColor = "green";
	 return true;
	}
	$(document).ready(function () {
   $("#addr").focusout(checkaddr);
});
function checkphno()
	{
	 var phno = $("#phno").val();
	
 
	if(phno.length!=10) {
  
  	 document.getElementById('phno').style.borderColor = "red";
	//document.getElementById("#fname")style.borderColor = "red";
 alert("Invalid Number Format");
	return false;
	
	}
	else
	{
		 document.getElementById('phno').style.borderColor = "green";
		$("#checkphno").html(" ");
		return true;
	}
	}
	$(document).ready(function () {
   $("#phno").focusout(checkphno);
});
function checkuid()
	{
	 document.getElementById('uid').style.borderColor = "green";
	 return true;
	}
	$(document).ready(function () {
   $("#uid").focusout(checkuid);
});
function checkpwd()
	{
	 document.getElementById('pwd').style.borderColor = "green";
	 return true;
	}
	$(document).ready(function () {
   $("#pwd").focusout(checkpwd);
});

$(document).ready(function() 
{	

	$("#vpb_pop_up_background").click(function()
	{
		$("#vpb_search_box").hide();
		$("#vpb_signup_pop_up_box").hide(); //Hides the sign-up box when clicked outside the form
		$("#vpb_login_pop_up_box").hide(); //Hides the login box when clicked outside the form
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

function vpb_show_search_box()
{
	$("#vpb_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_search_box").fadeIn('fast');
	window.scroll(0,0);
}


//This function displays the login box when called
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
	$("#vpb_search_box").hide(); 	//Hides the login box when clicked outside the form
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

  </body>
</html>
