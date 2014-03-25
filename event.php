<?php
mysql_connect("localhost","root","12345");

if($_POST){
@mysql_select_db("envisage") or die("unable to select database");
$update="";
$team_name=$_POST["team_name"];
$team_size=$_POST["team_size"];
$email=$_POST["email"];
$person_name=$_POST["person_name"];
$mobile=$_POST["mobile"];
$university=$_POST["university"];
$state=$_POST["state"];
//echo $team_name;
//echo $team_size;
//echo $email;
//echo $person_name;
//echo $mobile;
//echo $university;
//echo $state;

$query=mysql_query("select mobile from telephone");
while($row=mysql_fetch_array($query))
{
	if($mobile==$row['mobile'])
	{
		$update="User already registered with same mobile number.";
		goto last;
		//echo"<a href='event.html' style='background:#000000; text-align:center;background-size:30px 60px;'>Go Back</a>";
		//exit(1);
	}
}

if($team_name==""||$team_size==""||$email==""||$person_name==""||$mobile==""||$university==""||$state=="")
{
	$update="Pls fill all the fields.All fields are mandatory";
}
elseif($team_size<=0||$team_size>4)
{
	$update="Team size should be between 1 and 4.";
}
else
{
//$subject="Successfully Registered for Envisage.";
//$message="Hello $person_name.Thank you for registration for Envisage.";
//$from="abhishek.kapoor@iic.ac.in";
mysql_query("Insert into register (team_name,team_size,email,person_name,mobile,university,state) values('$team_name','$team_size','$email','$person_name','$mobile','$university','$state')");
mysql_query("insert into telephone values($mobile)");
$update="Thanks for registration";


//mail($email,$subject,$message,"From: $from\n");
}

//echo"<a href='event.html' style='background:#47639e; text-align:center;background-size:30px 1000px;'>Go Back</a>";
}
last:
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Envisage</title>   

<meta name="description" content="Annual Technical Fest Of Institute of Informatics And Communication" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   


<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">






<link href="logo.css" rel="stylesheet">
<!--<link href="logo2.css" rel="stylesheet">
<link href="logo3.css" rel="stylesheet">
<link href="logo4.css" rel="stylesheet">-->
<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
<!-- End Analytics -->
<script type="text/javascript" >
function readmore(){
document.getElementById('put').innerHTML="<li>Registration for the events will be considered on the first come first serve basis.</li><li>A team can have a minimum of 2 members and a maximum of 4 members.</li><ol>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <li>For a team of size 1-3 Rs. 150 per head.</li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <li>For a team of size 4 Rs. 500. </li></ol><br><li>It is mendatory for all participants in a team to belong to the same institute/college. </li><li>There is no restriction on the number of teams from any institute/college.</li><li>We have limited accommodation for outstation candidates.Registration for the same will be considered on first come first serve basis.Reqirements for accommodation should be confirmed latest by 28 February 2014.For accommodation: email us at:envisage@iic.ac.in and for any queries contact:Pushkar(+91-9899310092) </li><li>For a particular event only the maximum number of participants allowed for that event will be permitted.It is the participants's responsibility to be present at the respective event's time and venue.</li><li>It is necessary for the participants to use a given platform using the given tools only.</li><li>The schedule for the events is subject to change by the organizing committee without any prior notice to the participating teams.The details (if modified) will be conveyed at the venue of the event.</li><li>The teams who will clear the preliminiary round would qualify for the mains.</li><li>Decision of the judges will be considered final.</li><li>Participants using unfair means will be subject to being disqualify along with all their team mates in all the events.</li><li>For any other queries contact:</li><ol>&nbsp;&nbsp;&nbsp;<li><b>Siddharth Gautam</b> <br>9716242833<br>siddharth.gautam@iic.ac.in.</li>&nbsp;&nbsp;&nbsp;<li><b>Vineeta Mehta</b> <br>9873281131 <br>vineeta.mehta@iic.ac.in</li></ol>";
}

</script>

<script type="text/javascript" src="typeahead.js"></script>
<script type="text/javascript" src="forms.js"></script>
 <script type="text/javascript">
function validateForm(){
var numericExpression = /^[0-9]+$/;
var test = /^[1-4]+$/;
var team_name= document.getElementById('team_name');
var size = document.getElementById('size');
var mobile = document.getElementById('mobile');
var email = document.getElementById('email');
var person_name=document.getElementById('person_name');
var university=document.getElementById('university');
var state=document.getElementById('state');

/*var sTest = "g66ghy7";

var iCount = 0;
for (iIndex in sTest) {
    if (!isNaN(parseInt(sTest[iIndex]))) {
        iCount++;
    }
}*/
//var x=document.forms["contact-form"]["bg"].value;
//function isAlphabet(elem, helperMsg){
var alphaExp = /^[a-zA-Z][a-zA-Z ]+$/;
if(!team_name.value.match(alphaExp)){
// return true;
// }
//else{
alert("Please enter only letters for Name");
team_name.focus();
return false;
}
//} 
//function lengthRestriction(elem, min, max, helperMsg){
uInput =parseInt(size.value,10);

if(!size.value.match(test)){
// return true;
// }else{
alert("Team size should be between 1-4.");
size.focus();
return false;
}
//}
//function isNumeric(elem, helperMsg){toString().length

if((!mobile.value.match(numericExpression))||mobile.value.length!=10){
// return true;
/// }else{
alert("Please enter a 10 digit Mobile Number");
mobile.focus();
return false;
}
//}

if(!person_name.value.match(alphaExp)){
// return true;
// }
//else{
alert("Please enter only letters for Name");
person_name.focus();
return false;
}


if(!university.value.match(alphaExp)){
// return true;
// }
//else{
alert("Please enter only letters for Name");
university.focus();
return false;
}

if(!state.value.match(alphaExp)){
// return true;
// }
//else{
alert("Please enter only letters for Name");
state.focus();
return false;
}

}

</script>

</head>


<body>
   
<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a  href="index.html" title="Galvanizing Inovation"></a><!--id="goUp" href="#home-slider"-->
        </div>
        <nav id="menu">
        	<ul id="menu-nav">
        	
            	<!--<li class="current"><a  href="#home-slider">Home</a></li>-->
            	 
                <li><a href="#work">Events</a></li>
                <li><a href="#about">Glimpses</a></li>
                <li><a href="#about-sponsors">Sponsors</a></li>
                <li><a href="#contact">Register</a></li>
                <li><a href="#contact-deatils">Contact</a></li>
				
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
       
        
            <div class="span12">
                <div class="title-page">
               
                <img id="iiclogo" src=_include/img/iiclogo.png>
                <img id="dulogo" src=_include/img/dulogo.png>
                <img id="eventlogo" src=_include/img/work/thumbs/event2.png> 
                    <!--<h2 class="title">EVENTS</h2>
                    <h3 class="title-description">Check Out Our Events <a href="#"></a>.</h3>-->
                    

                </div>
            </div>
            
             
             
        </div>
        
           <div class="sticky-nav">
        
           <div id="logo1">
        	<a id="goUp" href="#home-slider" title="Galvanizing Inovation"></a>
           </div>
           </div>
 
        <!-- End Title Page -->
        
         
        <div class="row">
        	<!--<div class="span3">
            	
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work"></li>
                        <li><a href="#filter" data-option-value="*" class="selected"></a></li>
                        <li><a href="#filter" data-option-value=".design"></a></li>
                        <li><a href="#filter" data-option-value=".photography"></a></li>
                        <li><a href="#filter" data-option-value=".video"></a></li>
                    </ul>
                </nav>
                
            </div> -->
            
            <div   class="span12">
            	<div  class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/osten.jpg">
                                	<span id=hover1 class="overlay-img"></span>
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/ostentatio.jpg" alt="<ul><li>Participant have to bring their own cameras and the required softwares, computers  may be allotted on request.<li>Participant can cover all the events, opening ceremony and pre-event activities  as well going in the Institute.<li>Team Size:1-2.<li>Platform:Linux/Windows.<li>Further rules shall be disclosed before the event.</ul>">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/lan.jpg">
                                	<span id=hover2 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/lanstorm.jpg" alt="<ul><li>COUNTER STRIKE<ul><li>Team Size - 3<li>Gaming platform- windows OS.</ul><li>NFS-MOST WANTED<ul><li>Team Size : 1<li>Gaming platform- Mac OS.</ul><li>Further details shall be disclosed before the event.</ul>">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a  class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/make.jpg">
                                	<span  id=hover3 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/makebreak.jpg" alt="<ul><li>Preliminary round will be a MCQ based on C, C++ and JAVA.<li>Four team will qualify for final round.<li>Final round will be based on Debugging and finding out errors.<li>Team Size : 2<li>Further details shall be disclosed before the event.</ul>">
                            </li>
                        	<!-- End Item Project -->
                      <!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="X-QuizIT" href="_include/img/work/full1/xquizit.jpg">
                                	<span id=hover4 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/xquizit.jpg" alt="<ul><li>The event has a preliminary round of MCQs.<li>Qualifying teams would compete with each other in Mains round.<li>Team Size : 2<li>Further rules shall be disclosed by the coordinators before the event.</ul>">
                            </li>
                 
                        	
                        	           	<!-- End Item Project -->  
                           <!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Co-Dennis" href="_include/img/work/full1/code.jpg">
                                	<span id=hover5 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/codennis.jpg" alt="<ul><li>Co-Dennis will be based on Technical Knowledge of programming in C & C++.<li>There will be Two Rounds- Prelims & Mains.<li>Team clearing the prelims will proceed towards the mains.<li>Team Size : 2<li>Further rules shall be disclosed by the coordinators before the event.</ul>">
                            </li>
                         
                        	
                        	                           <!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/art.jpg">
                                	<span id=hover6 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/arteffect.jpg" alt="<ul><li>Bring nothing but your creative mind.<li>Duration:75 minutes.<li>Editor to be used : Coreldraw, Photoshop.<li>Team Size : 1-2<li> Theme would be given at the start of the event.<li>Further rules shall be disclosed before the event.</ul>">
                            </li>
                            <!-- End Item Project --> 
                                  	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/script.jpg">
                                	<span id=hover7 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/scriptmaestro.jpg" alt="<ul><li>This event will have one round.<li>Platform: Windows/Mac OS X/Ubuntu.<li>Team Size : 2.<li> Further rules shall be disclosed at the event.</ul>">
                            </li>
                           
                               	<li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/thewhite.jpg">
                                	<span id=hover8 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/whitecollars.jpg" alt="<ul><li>Papers are invited for research done under these topics.<ul><li>Network Security Model<li>Future Web Technology</ul><li>Both Undergraduate and Postgraduate students can participate.<li>Only single registration is allowed.<li>Date of Submission(Soft Copy via email) - 26 February, 2014.<li>Date of Presentation - 2 March,2014</ul>">
                            </li>
                            
                            <li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/setsnsteps.jpg">
                                	<span id=hover9 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/setsnsteps.jpg" alt="<ul><li>The event has a preliminary round of MCQs based on Data Sructure & Algorithms.<li>Qualifying teams would compete with each other in Mains round.<li>Team Size : 2.<li>Further rules shall be disclosed by the coordinators before the event.</ul>">
                            </li>
                            
                        
                            
                             <li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/osiris.jpg">
                                	<span id=hover10 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/osiris.jpg" alt="<ul><li>This event has a Preliminary round of MCQ based on Operating System.<li>Four Teams will qualify for the final round.<li>Final  round will be based on Shell Scripting.<li>Team Size : 2<li>Further rules shall be disclosed before the event.</ul>">
                            </li>
                            
                            
                             <li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/haze.jpg">
                                	<span id=hover11 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/hazemaze.jpg" alt="<ul><li>Treasure hunt will be based on Technical Knowledge, Brainstorming Power and Physical Activities.<li>There will be certain number of stages.<li>Platform:Linux.<li>Team Size : 2<li>Further rules shall be disclosed by the judges before the event.</ul>">
                            </li>
                            
                            
                                 <li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/app.jpg">
                                	<span id=hover12 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/weavenapp.jpg" alt="<ul><li>Bring nothing but your mind.<li>Note:Dont worry we will be providing you the Internet facility and all the stuff required to develop the app.<li>Problem statement and platform will be given when the event kick start.<li>Max Team Size : 2<li>Further rules shall be disclosed before the event.</ul>">
                            </li>
                            
                                   <li class="item-thumbs span3 photography">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Rules:" href="_include/img/work/full1/turncoat.jpg">
                                	<span id=hover13 class="overlay-img"></span>
                                    <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/turncoat.jpg" alt="<ul><li>Time duration of debate: 4 minutes.<li>Participants have to switch over for/against the argument instantaneously according to the judges.<li>Team Size : 1 <li>Further rules shall be disclosed by the judges before the event.</ul>">
                            </li>
                        	<!-- End Item Project -->   
							<!-- Item Project and Filter Name 
                        	<li class="item-thumbs span3 video">
                            	
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/51460511">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                
                                <img src="_include/img/work/thumbs/image-08.jpg" alt="Video">
                            </li>
                        	 End Item Project -->
                            
							<!-- Item Project and Filter Name 
                        	<li class="item-thumbs span3 photography">
                            	
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="_include/img/work/full/image-04-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                              
                                <img src="_include/img/work/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							
                            
						
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Glimpses</h2>
                <h3 class="title-description">Some moments of Envisage.</h3>
            </div>
        </div>
    </div>
    
    <div class="row">
    <div   class="span12">
            	<div  class="row">
                	<section id="projects">
                    	<ul id="thumbs">
    <!-- End Title Page -->

    
   <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp1.jpg">
                                
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp1.jpg" alt="">
                            </li>
       <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp2.jpg">
                                	
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp2.jpg" alt="">
                            </li>
       <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp8.jpg">
                                	
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp8.jpg" alt="">
                            </li>
       <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp5.jpg">
                                
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp5.jpg" alt="">
                            </li>
       <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp4.jpg">
                                	
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp4.jpg" alt="">
                            </li>
       <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp6.jpg">
                                	
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp6.jpg" alt="">
                            </li>
       <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp3.jpg">
                                	
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp3.jpg" alt="">
                            </li>
       <li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="" href="_include/img/work/960X800/glimp7.jpg">
                                	
                                   <!-- <span class="overlay-img-thumb font-icon-plus"></span>-->
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/570X400/glimp7.jpg" alt="">
                            </li>
    
        
     </section>
                    
   
   
    <!-- End People -->
</div>
</div>
</div>
<div id="about-sponsors"></div>
<!-- End About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Sponsors</h2>
                <!--<h3 class="title-description"></h3>-->
                <img style="width:170px;height:100px"  src=_include/img/work/thumbs/amdlogo.jpg> 
                
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    

        
     
    </div>
    <!-- End People -->
</div>



<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Registration</h2>
                <?php
                if($_POST)
                {
                echo"<h2 class='title'>$update</h2>";
                }
                ?>

            </div>
        </div>
    </div>
    <!-- End Title Page -->
    

  <div class="row">
    	  <div class="span9">
    	  
       
        	<form id="contact-form" class="contact-form" onsubmit="return validateForm()" method="post" action="#contact">
            	
            	<p class="contact-name">
            	
            		<input id="team_name" type="text" placeholder="Team Name" value="" name="team_name" required="true" /> Team Name
            	
            	</dd>
                </p>
                	<p class="contact-name">
            		<input id="size" type="number" placeholder="Team Size (1-4)" value="" name="team_size" required="true" /> Team Size
                </p>
                <p class="contact-email">
                	<input  type="email" placeholder="Email Address" value="" name="email" required="true"/> Email
                </p>
               <!-- <p class="contact-message">
                	<textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                </p>-->
                </p>
                	<p class="contact-name">
            		<input id="person_name" type="Text" placeholder="Contact Person Name" value="" name="person_name" required="true"/> Contact Person Name
                </p>
                	<p class="contact-name">
            		<input id="mobile" type="number" placeholder="Mobile Number" value="" name="mobile" required="true"/> Mobile Number
                </p>
                <p class="contact-name">
            		<input id="university" type="Text" placeholder="Institute/University" value="" name="university" required="true"/> Institute/University
                </p>
                <p class="contact-name">
            		<input id="state" type="Text" placeholder="State" value="" name="state" required="true"/> State
                </p>
                <p class="contact-submit">
                
                	<input class=submit style="margin-bottom:30px;" type="submit" value="Submit" required="true"/>
                </p>
                
            </form>

	 
        </div>
        
        <div id=contact-deatils class="span12">
        
        	<div class="contact-details">
        	<iframe width="1200" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=institute+of+informatics+and+communication&amp;aq=&amp;sll=28.581507,77.23938&amp;sspn=0.093008,0.169086&amp;ie=UTF8&amp;hq=institute+of+informatics+and+communication&amp;hnear=&amp;ll=28.581507,77.23938&amp;spn=0.093008,0.169086&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=institute+of+informatics+and+communication&amp;aq=&amp;sll=28.581507,77.23938&amp;sspn=0.093008,0.169086&amp;ie=UTF8&amp;hq=institute+of+informatics+and+communication&amp;hnear=&amp;ll=28.581507,77.23938&amp;spn=0.093008,0.169086&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        		<h3>Contact Us</h3>
                <ul>
                    <li><a href="#">envisage@iic.ac.in</a></li>
                    <li>(011) 2411-0237</li>
                    <li>Institute of Informatics & Communication, UDSC<br>
                        Benito Jaurez Road,<br>
                        New Delhi-110021<br>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->

<!--general rules-->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="test">
                <h2 class="title">General Rules</h2>
                <ul >
		<li style="text-align=left;">Students of B.sc,BCA,B.Tech,MCA,M.sc(CS/IT/CA/Electronics),M.Tech are eligible for the participation for the tech fest.</li>
		<li>Registration for the event will begin at 8:30 on both days and will be open whole day.However,registration for a particular event will be closed half an hour before the culmination of the event OR when the maximum participation for the event is reached.</li>
		<li>Participants are requested to carry the identity cards of their institute for authentication.</li>
		<div id=put >
		<a  onclick="readmore()" >Read All...</a>
		</div>
                </ul>

            </div>
        </div>
    </div>
</div>
</div>
<!--general rules ends-->
<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/Envisageiic " title="Follow Us on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/events/570689706342945/" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<!--<footer>
	<p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template"></a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer"></a></p>
</footer>
<!-- End Footer --> 

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>
