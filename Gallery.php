<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Created by: Abhi Jay Krishnan
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Me</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="icon" href="./abhi_fb_YIa_icon.ico"/>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
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
				<li ><a href="My_Resume.html" accesskey="2" title="">Curriculum Vitae</a></li>
                                <li class="current_page_item"><a href="Gallery.php" accesskey="2" title="">Gallery</a></li>
                                <li><a href="contactMe.html" accesskey="5" title="">Contact me!</a></li>
                                <li> <a href="My_Codes.php?arg=1" accesskey="3" title="">Projects Archive</a></li>
			</ul>
		</div>
	</div> 
        <div id="main">
            <div id="welcome">
                    <div class="title">
                            <h2><strong>Gallery</strong></h2>
                    </div>
                 <h3>Memories</h3><br/><hr/><br/>
                    <?php
                        $folder_path = 'img2/'; //image's folder path

                        $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

                        $folder = opendir($folder_path);

                        if($num_files > 0)
                        {
                         while(false !== ($file = readdir($folder))) 
                         {
                          $file_path = $folder_path.$file;
                          $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
                          if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
                          {
                           ?>
                                    <a href="<?php echo $file_path; ?>"><img id="gal" src="<?php echo $file_path; ?>"  height="150" /></a>
                                    <?php
                          }
                         }
                        }
                        else
                        {
                         echo "the folder was empty !";
                        }
                        closedir($folder);
                        ?>
                <h3>Some of my drawings</h3><br/><hr/><br/>
                    <?php
                        $folder_path = 'Drawings/'; //image's folder path

                        $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

                        $folder = opendir($folder_path);

                        if($num_files > 0)
                        {
                         while(false !== ($file = readdir($folder))) 
                         {
                          $file_path = $folder_path.$file;
                          $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
                          if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
                          {
                           ?>
                                    <a href="<?php echo $file_path; ?>"><img id="gal" src="<?php echo $file_path; ?>"  height="150" /></a>
                                    <?php
                          }
                         }
                        }
                        else
                        {
                         echo "the folder was empty !";
                        }
                        closedir($folder);
                        ?>
                      <br/><br/>
                   
            </div>
        </div>
 </div>     
</body>