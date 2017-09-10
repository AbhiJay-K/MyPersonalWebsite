<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools Templates
 * and open the template in the editor.
 */
function display_game()
{
    $phpself = $_SERVER['PHP_SELF'];
    echo <<<DISPLAYGAME
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Monty Hall Game</title>
        <link rel="icon" href="./abhi_fb_YIa_icon.ico">
        <link rel="stylesheet" href="./playgame_style.css">
        <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
        </head>
        <body>
        <div class="content1">
        <h1 style='text-align:center'>Monty Hall Problem</h1>
        <h2>Choose a door..</h2>
        <form action="$phpself" method="POST">
        <input type='hidden' name='page' value='0'/>
        <button type='submit' name='door' value='1' style="background-color:transparent; border-color:transparent;"><img src='./Monty Hall images/closed door brown 1.png'/></button>
        <button type='submit' name='door' value='2' style="background-color:transparent; border-color:transparent;"><img src='./Monty Hall images/closed door brown 2.png'/></button>
        <button type='submit' name='door' value='3' style="background-color:transparent; border-color:transparent;"><img src='./Monty Hall images/closed door brown 3.png'/></button>
        </form>
        </div>
        <nav>
            <table>
                 <tr>
                 <td><a href='./montyindex.html'>Back</a></td>
                 <td><a href='./My_Codes.php?arg=4'>Exit</a></td>
                 <tr>
           </table> 
        </nav>
         <footer>
		<span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
        </footer>
        </body>
        </html>
DISPLAYGAME;
}
function handle_game()
{
   $door = $_POST['door'];
        echo <<<DISPLAYGAME
                                    <head>
                                    <meta charset="UTF-8">
                                    <title>Monty Hall Game</title>
                                   <link rel="icon" href="./abhi_fb_YIa_icon.ico">
                                    <link rel="stylesheet" href="./playgame_style.css">
                                    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
                                    <script src="./montyhall.js"></script>
                                    </head> 
                                    <body onload="handle_game1($door)">
                                    <div class="content1">
                                        <h1 style='text-align:center'>Monty Hall Problem</h1>
                                        <h2 id="message1"></h2>
                                        <h3 id="message2"></h3>
                                        <img src="#" id="door1"/>
                                        <img src="#" id="door2"/>
                                        <img src="#" id="door3"/>
                                        <div class="bottom" id="bottom"></div>
                                    </div>
                                    <nav>
                                        <table>
                                             <tr>
                                             <td><a id="try" href="./playgame.php">Try again</a></td>
                                             <td><a href='./montyindex.html'>Back</a></td>
                                             <td><a href='./My_Codes.php?arg=4'>Exit</a></td>
                                             <tr>
                                       </table> 
                                    </nav>
                                     <footer>
                                        <span>&copy; Abhi Jay Krishnan. All rights reserved. </span>
                                     </footer>
                                  </body>
                                   </html>
DISPLAYGAME;
                                   
}
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST')
{
    handle_game();
}
else
{
    display_game();
}
?>
<html>                                  