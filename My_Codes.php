<?PHP
function LoadPage()
{
$arg1=1;
$arg2=2;
$arg3=3;
echo<<<ABHIINDEX1
<!DOCTYPE html>
<!--
Created by: Abhi Jay Krishnan
-->
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>My C++ Codes</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" href="./abhi_fb_YIa_icon.ico"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="syntaxheighlight/styles/shCore.css" rel="stylesheet" type="text/css" />
<link href="syntaxheighlight/styles/shThemeRDark.css" rel="stylesheet" type="text/css" />
 <script src="syntaxheighlight/scripts/shCore.js"></script>
  <script src="syntaxheighlight/scripts/shBrushCpp.js"></script>
  <script>
    SyntaxHighlighter.all()
  </script>
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
				<li ><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="My_Resume.html" accesskey="2" title="">Curriculum Vitae</a></li>
                                <li ><a href="Gallery.php" accesskey="2" title="">Gallery</a></li>
                                <li><a href="contactMe.html" accesskey="5" title="">Contact me!</a></li>
                                <li class="current_page_item"> <a href="My_Codes.php?arg=1" accesskey="3" title="" id="coderequest">Projects Archive</a> </li>
			</ul>
		</div>
	</div>
ABHIINDEX1;
$arg=htmlspecialchars(stripslashes(trim((int)$_GET['arg'])));
switch($arg)
{
    case 1: Intro();
            break;
    case 2: This_Website();
            break;
    case 3: dive_scoreboard();
            break;
    case 4: monty_hall();
            break;
   default :Error($arg);
        
}

echo<<<ABHIINDEX2
	
	</div>
</div>
</body>
</html>
ABHIINDEX2;
}
function Intro()
{
echo<<<ABHIINDEX3
    <div id="main">
		<div id="welcome">
			<div class="title">
				<h2><strong>My Codes</strong></h2>
			</div>
		</div>
            
        <div id="featured">
                    <ul class="style1">
				<li class="first">
                                    <div class="title">
                                    <p>This section contains some of my projects done on self-interest or as part of academic assignments. Please feel free to go through sourse code, but note that I don’t claim them to be error free. 
                                    </p><br/>
                                    <h2>Projects</h2><br/><hr/><br/>
                                    <div id="prtable">
                                    <table>
                                        <tr>
                                                <th>Title</th>
                                                <th>Download Source Code</th>
                                        </tr>
                                        <tr>
                                                <td><a href="My_Codes.php?arg=2">This Website</a></td>
                                                <td>N/A</td>
                                        </tr>
                                        <tr>
                                                <td><a href="My_Codes.php?arg=3">Diving competition Scoreboard(c++)</a></td>
                                                <td><a href="./codes/Diving_competition_soreboard.zip" download="">
                                                                <div>
                                                                        <img src="./images/download.ico" alt="click here" style="margin:0px; padding:0px; float:left; height:auto; width:4%;"/> 
                                                                        <p style="width:95%; float:right; color:white; padding-left:2px;">Download</p>
                                                                </div>
                                                        </a>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td><a href="My_Codes.php?arg=4">Monty hall simulator (4 and 5 doors)</a></td>
                                                <td><a href="./codes/Monty Hall Simulation.zip" download="">
                                                                <div>
                                                                        <img src="./images/download.ico" alt="click here" style="margin:0px; padding:0px; float:left; height:auto; width:4%;"/> 
                                                                        <p style="width:95%; float:right; color:white; padding-left:2px;">Download</p>
                                                                </div>
                                                        </a>
                                                </td>
                                        <tr>
                                </table>
                                <div>
                                    <br/><br/>
                                    <p style="float:right;"><a href="My_Codes.php?arg=2"><b>NEXT: This Website<b> <img src="./images/arrow.png" alt="click here" height="15" width="15"></a></p>
                                    </div>
                                </li>
			</ul>
		<div id="copyright">
			<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
		</div>
        </div>
ABHIINDEX3;
}
function This_Website()
{
echo<<<ABHIINDEX3
    <div id="main">
		<div id="welcome">
			<div class="title">
				<h2><strong>This website</strong></h2>
			</div>
		</div>
            
        <div id="featured">
                    <ul class="style1">
				<li class="first">
                                    <div class="title">
                                    <p>This website is built from scratch – almost fully hands-on coded work (except for format). Another, probably an easier way, to make websites is to use content management systems such as Drupal, WordPress, Joomla etc. 
                                        These require little or no programming experience. However, in the interest of learning, I decided to build this website using whatever I know in the field of web development. 
                                        It is meant to be simple and has a small foot print.</P>
                                    <P>Coding is done using HTML, CSS, JavaScript and PHP. The photo gallery is done with <a href="http://www.jssor.com/">jssor</a> plugin ( build using  jquery ). The Monty hall <a href="./montyindex.html">game</a> is done JavaScript and html.</p>
                                    <p>Home page feeds are basically RSS feed from various cyber security websites, and a cyber security related google alert.</p>
                                    <br/><br/>
                                    <p style="float:right;"><a href="My_Codes.php?arg=3"><b>NEXT: Diving competition Soreboard<b> <img src="./images/arrow.png" alt="click here" height="15" width="15"></a></p>
                                    </div>
                                </li>
			</ul>
		<div id="copyright">
			<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
		</div>
        </div>
ABHIINDEX3;
}
function Error($arg)
{
echo<<<ABHIINDEX3
    <div id="main">
		<div id="welcome">
			<div class="title">
				<h2><strong>This website</strong></h2>
			</div>
		</div>
            
        <div id="featured">
                    <ul class="style1">
				<li class="first">
                                    <div class="title">
                                    <p>ERROR: invalid request : $arg</p>
                                    </div>
                                </li>
			</ul>
		<div id="copyright">
			<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
		</div>
        </div>
ABHIINDEX3;
}
function dive_scoreboard()
{
echo<<<ABHIINDEX3
    <div id="main">
		<div id="welcome">
			<div class="title">
				<h2><strong>Diving competition Soreboard</strong></h2>
			</div>
		</div>
            
        <div id="featured">
                    <ul class="style1">
				<li class="first">
                                    <div class="title">
                                    <p>This is one of my first C++ programmes.. <img src="./images/smiley_face.png" style="height:12px; width:12px;"/> : Basically a program to print out the score for a diving competition. 
                                        It reads the difficulty level of the dive and the score given by 4 judges.</p>
                                    <p>The requirement is to exclude the lowest and highest scores by the judges and output the result.</p>        
   <br/>
<h3>Expected output</h3>
<pre>
   Summary Table
   =================
   judge  Result  Remark
   **     ***     
   **     ****     ***
   **     ***     ****
   **     ***     
   degree of difficulty:**
   final score :**
</pre>
                                    <h2>Output Screenshot</h2>
                                    <figure>
                                        <img src="./images/dive_score.JPG" alt="output screen shot" width="80%"/>
                                        <figcaption>Sample output for Diving competition Scoreboard</figcaption>
                                    </figure>
                                    <br/><br/>
                                    <a href="./codes/Diving_competition_soreboard.zip" download="">
                                        <div>
                                        <img src="./images/download.ico" alt="click here" style="margin:0px; padding:0px; float:left; height:auto; width:4%;"/> 
                                        <p style="width:95%; float:right; color:white; padding-left:2px;">download source code</p></div>
                                    </a>
                                    <br/><br/>
                                    <p style="float:right;"><a href="My_Codes.php?arg=4"><b>NEXT: Monty Hall Simulation<b> <img src="./images/arrow.png" alt="click here" height="15" width="15"></a></p>
                                    </div>
                                </li>
			</ul>
		<div id="copyright">
			<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
		</div>
        </div>
ABHIINDEX3;
}
function monty_hall()
{
echo<<<ABHIINDEX3
    <div id="main">
		<div id="welcome">
			<div class="title">
				<h2><strong>Monty Hall Simulation</strong></h2>
			</div>
		</div>
            
        <div id="featured">
                    <ul class="style1">
				<li class="first">
                                    <h2>What is Monty Hall Simulation?</h2>
                                    <p>The Monty Hall problem is a brain teaser, in the form of a probability puzzle, 
                                        loosely based on the American television game show Let's Make a Deal and named after its original host, Monty Hall.</p>
                                    <h2>About this project</h2>
                                    <p>This project consists of a macro driven excel program that simulates ten thousand games of Monty hall. 
                                       It reports the percentage win if the player choose to swap between the  doors in the middle of the game and if he doesn't. The user can choose to generate report based on a Monty hall game with 4 doors or 5 doors. 
                                       The simulation worksheet (Monty_Hall_Worksheet) has a button that will request for the number of doors on click (will only work if you enter 4 or 5). The summary worksheet displays the report generated.</p>
                                    <p>The result generated after simulation will be similar to the expected output. This simulation is done using random number generators.
                                    <p>If you want to know more about the game you can check out the small demo game that i created (click the play button bellow).</p>
                                    <p>The excel macro enabled worksheet works best on excel 2010 version on words.</p>
             
                                    <h2>How is it played?</h2>
                                    <p>There are three doors.</p>
                                    <img src='./images/closed door brown 1.png' alt="Door 1 image" style="height: 300px; width: 200px;"/>
                                    <img src='./images/closed door brown 2.png' alt="Door 2 image" style="height: 300px; width: 200px;"/>
                                    <img src='./images/closed door brown 3.png' alt="Door 3 image" style="height: 300px; width: 200px;"/>
                                    <p>Behind each door there is either a goat or a car. Initially the host will ask the player to pick a door.Then the host will open one of the remaining two doors which has a goat behind it.
                                    After this the player will be given a choice either to stay with the current choice or to switch to the other closed door. Should the player switch?
                                    The answer is yes. The player will double the chance if he choose to switch.</P>
                                    <br/>
                                    <h3><strong>Play a demonstration game</strong></h3><br/>
                                        <div><a href="./montyindex.html" style="background-color: #2980b9; font-size: 20px; color:white; text-decoration: none;padding:10px; border-radius: 10px;">Play</a></div><br/>
                                    <h2>Expected Result</h2>
                                    <br/>
                                    <h3><strong>4 DOOR SCENARIO</strong></h3><br/>
                                    <table style="text-align: left; background-color: #252525; color:white; width: 512px; height: 485px;" border="1" cellpadding="2" cellspacing="2">
                                         <tbody>
                                           <tr>
                                             <td style="width: 106px; height: 171px; font-family: Calibri Light; font-weight: bold;"><big><big><big>4 DOOR</big></big></big></td>
                                             <td style="width: 106px; height: 171px; font-family: Calibri Light; font-weight: bold;"><small><small><small><small><span style="font-size: 20pt; line-height: 107%;">WIN IF NOT SWAPPED</span></small></small></small></small></td>
                                             <td style="width: 106px; height: 171px; font-family: Calibri Light; font-weight: bold;"><small><small><span style="font-size: 20pt; line-height: 107%;">WIN IF SWAPPED</span></small></small></td>
                                           </tr>
                                           <tr>
                                             <td style="width: 106px; height: 192px; font-family: Calibri Light; font-weight: bold;"><big><big><big>CAR</big></big></big></td>
                                             <td style="width: 221px; height: 192px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">1/4 (25%)</span></big></td>
                                             <td style="width: 221px; height: 192px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">3/8(37.5%)</span></big></td>
                                           </tr>
                                           <tr>
                                             <td style="width: 106px; font-family: Calibri Light; font-weight: bold;"><big><big><big>GOAT</big></big></big></td>
                                             <td style="width: 221px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">3/4(75%)</span></big></td>
                                             <td style="width: 221px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">5/8(62.5%)</span></big></td>
                                           </tr>
                                         </tbody>
                                       </table>
                                       <br/>
                                        <h3><strong>5 DOOR SCENARIO</strong></h3><br/>
                                       <table style="text-align: left; background-color: #252525; color:white; width: 512px; height: 485px;" border="1" cellpadding="2" cellspacing="2">
                                             <tbody>
                                               <tr>
                                                 <td style="width: 106px; height: 171px; font-family: Calibri Light; font-weight: bold;"><big><big><big>5&nbsp;DOOR</big></big></big></td>
                                                 <td style="width: 106px; height: 171px; font-family: Calibri Light; font-weight: bold;"><small><small><small><small><span style="font-size: 20pt; line-height: 107%;">WIN IF NOT SWAPPED</span></small></small></small></small></td>
                                                 <td style="width: 106px; height: 171px; font-family: Calibri Light; font-weight: bold;"><small><small><span style="font-size: 20pt; line-height: 107%;">WIN IF SWAPPED</span></small></small></td>
                                               </tr>
                                               <tr>
                                                 <td style="width: 106px; height: 192px; font-family: Calibri Light; font-weight: bold;"><big><big><big>CAR</big></big></big></td>
                                                 <td style="width: 221px; height: 192px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">1/5
                                           (20%)</span></big></td>
                                                 <td style="width: 221px; height: 192px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">4/15(26.66%)</span></big></td>
                                               </tr>
                                               <tr>
                                                 <td style="width: 106px; font-family: Calibri Light; font-weight: bold;"><big><big><big>GOAT</big></big></big></td>
                                                 <td style="width: 221px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">4/5(80%)</span></big></td>
                                                 <td style="width: 221px; font-family: Calibri Light; font-weight: bold;"><big><span style="font-size: 18pt; line-height: 107%;">11/15(73.33%)</span></big></td>
                                               </tr>
                                             </tbody>
                                          </table>
                                           <br/><br/>
                                        <a href="./codes/Monty Hall Simulation.zip" download="">
                                        <div>
                                        <img src="./images/download.ico" alt="click here" style="margin:0px; padding:0px; float:left; height:auto; width:4%;"/> 
                                        <p style="width:95%; float:right; color:white; padding-left:2px;">download source code</p></div>
                                    </a>
                                    <br/><br/>
                                        </div>
                                </li>
			</ul>
		<div id="copyright">
			<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
		</div>
        </div>
ABHIINDEX3;
}
function Card_shuffle()
{
echo<<<ABHIINDEX3
    <div id="main">
		<div id="welcome">
			<div class="title">
				<h2><strong>Card shuffing system</strong></h2>
			</div>
		</div>
            
        <div id="featured">
                    <ul class="style1">
				<li class="first">
                                    <div class="title">
                                    <p>This is one of my first programme I created in c++.</p>
                                    <p>A Programme to print out the score for a diving competition.</p>
                                    <p>It includes:-</p>
                                    <p> Read score given by 4 judges and the difficulty level of the dive.</p>
                                     <p>  Exclude the lowest and highest score given by the judges while computing the score. </p>
                                     <p> Print out the highest and lowest score are being eliminated.</p></li>
                                     <p> Calculate the score.</p>
                                     <p> Print out the final summary table:</p><br/>
<pre>
   Summary Table
   =================
   judge  Result  Remark
   **     ***     
   **     ****     ***
   **     ***     ****
   **     ***     
   degree of difficulty:**
   final score :**
</pre>
                                    <h2>Output Screenshot</h2>
                                    <figure>
                                        <img src="./images/dive_score.JPG" alt="output screen shot" width="80%"/>
                                        <figcaption>Sample output for Diving competition Scoreboard</figcaption>
                                    </figure>
                                    <br/><br/>
                                    <a href="./codes/Diving_competition_soreboard.zip" download="">
                                        <div>
                                        <img src="./images/download.ico" alt="click here" style="margin:0px; padding:0px; float:left; height:auto; width:4%;"/> 
                                        <p style="width:95%; float:right; color:white; padding-left:2px;">download source code</p></div>
                                    </a>
                                    <br/><br/>
                                    <p style="float:right;"><a href="My_Codes.php?arg=4" id="coderequest" ><b>NEXT: Monty Hall Simulation<b> <img src="./images/arrow.png" alt="click here" height="15" width="15"></a></p>
                                    </div>
                                </li>
			</ul>
		<div id="copyright">
			<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
		</div>
        </div>
ABHIINDEX3;
}
$method = $_SERVER["REQUEST_METHOD"];
if($method = "GET")
{
    LoadPage();
}
?>
