<?PHP
echo<<<ABHIINDEX
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name=viewport content='width=700'>
<!--<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />-->
<link rel="icon" href="./abhi_fb_YIa_icon.ico">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
				<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
				type="text/javascript"></script>
<link href="feed style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
							function load() {
							var feed1 ="http://feeds.feedburner.com/Securityweek?format=xml";
							new GFdynamicFeedControl(feed1, "feedControl1");
							var feed2 ="http://krebsonsecurity.com/feed/";
							new GFdynamicFeedControl(feed2, "feedControl2");
							var feed3 ="http://www.darkreading.com/rss_simple.asp";
							new GFdynamicFeedControl(feed3, "feedControl3");
                                                        var feed4 ="https://www.google.com/alerts/feeds/10803589283727622728/16002938076797951573";
							new GFdynamicFeedControl(feed4, "feedControl4");
							}
							google.load("feeds", "1");
							google.setOnLoadCallback(load);
							</script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<a href="index.php">
                            <img src="./images/pic02.jpg" alt="" />
                        </a>
			<h1><a href="index.php">"Abhi Jay Krishnan"</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="My_Resume.html" accesskey="2" title="">Curriculum Vitae</a></li>
                                <li ><a href="Gallery.php" accesskey="2" title="">Gallery</a></li>
                                <li><a href="contactMe.html" accesskey="5" title="">Contact me!</a></li>
                                <li> <a href="My_Codes.php?arg=1" accesskey="3" title="">Projects Archive</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
		<!--<div id="banner">
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>-->
		<div id="welcome">
			<div class="title">
				<h2>{<strong> &emsp;Welcome to my website&emsp; </strong>}</h2>
				<span class="byline">My simple portfolio website</span>
			</div>
			<p>This website acts as my profile at the same time i have considerd it as platform to share my ideas</p>
		</div>
		<div id="featured">
			<div class="title">
				<h2>About Me</h2>
			</div>
                        <br/><hr/><br/>
                        <div>
                        <p style="text-align: left"><i>“Science is what we understand well enough to explain to a computer. Art is everything else we do.”</i><br/>
 – Donald Knuth 
<br/>Presently I am pursuing Bachelor of Computer Science (majoring in Digital Systems Security) undergraduate program offered by University of Wollongong. 
<br/><i>“Why Computer Science? “</i>
<br/>&emsp;High school programming assignments helped me to develop passion in computer programming. After high school and before enlisting into national service, I continued C++ programming as part of a self-improvement initiative. This experience motivated me to study further in this field.
<br/>&emsp;I have acquired basic C/C++, Java programming skills and gained insight in algorithm and data structure implementations. I could also get exposure in Linux environment and bash scripting. Education at UOW has also provided me with basic knowledge in software engineering life cycle and the usage of UML tools to express the design. Finally, I have gained some knowledge on Cryptography, Network Security and System Security.
<br/>&emsp;Completing two years of National Service in Singapore Armed forces (Army) was a major mile stone in my life. It was both physically and mentally demanding. I could make friends with people from different background. As part of my National Service, I gained some logistic experience in managing inventory (armoured vehicle spare parts). 
<br/>&emsp;Something that I enjoy most during my free time is visual arts (painting and pencil sketching). Even though my art work may not an eye pleaser, it helps to unwind and refresh. I have included some of my works in the gallery page.
<br/>&emsp;As a student at SIM, I had the opportunity to be part of CCA clubs such as the SIM IT Club (Secretary) and a member of SIM UOW Student Council. As the Secretary of SIM IT Club, I was part of a team that organised several successful events and had the opportunity to conduct a few programming related workshops.</p>
<div/>
                        
                        <br/><hr/><br/>
		</div>
		<div id="copyright">
			<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
		</div>
	</div>
</div>
</body>
</html>
ABHIINDEX;
?>
