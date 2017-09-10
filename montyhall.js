/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var imagecloseddoor1 = "./Monty Hall images/closed door brown 1.png";
var imagecloseddoor2 = "./Monty Hall images/closed door brown 2.png";
var imagecloseddoor3 = "./Monty Hall images/closed door brown 3.png";
var goatdoor = "./Monty Hall images/goat behind door.png";
var cashdoor = "./Monty Hall images/cash behind door.png";
var door1goatmessage = "Door 1 has a goat";
var door2goatmessage = "Door 2 has a goat";
var door3goatmessage = "Door 3 has a goat";
var bottom1 = "<h2>Do wish to swap the remaining door?</h2> <a href='#' onclick='handle_game2(1)' style='background-color: #2980b9; font-size: 20px; color:white; text-decoration: none; padding:5px; border-radius: 10px; margin:10px; margin-bottom:30px;'>Yes</a><a href='#' onclick='handle_game2(2)' style='background-color: #2980b9; font-size: 20px; color:white; text-decoration: none; padding:5px; border-radius: 10px; margin:10px; margin-bottom:30px;'>No</a>";
var bottom2 = "<br/><p>Better luck next time</p>";
var bottom3 = "<br/><p>Play again!</p>";
var selectedDoor = 0;
var prizedoor = 0;
var opendoor = 0;
var swapdoor = 0;
var same = 0;
function create_doors()
{
     prizedoor = ((Math.floor((Math.random() * 10) + 1)) % 3) + 1;
     do
     {
         opendoor = ((Math.floor((Math.random() * 10) + 1)) % 3) + 1;
     }while (opendoor === prizedoor || opendoor === selectedDoor)
}
function handle_game1(arg)
{
    selectedDoor = arg;
    create_doors();
    document.getElementById("message2").innerHTML = "<h3>Your have currently selected door " + selectedDoor +"</h3>";
    switch(opendoor)
    {
        case 1:document.getElementById("message1").innerHTML = "Door 1 has goat";
               document.getElementById("door1").src = goatdoor;
               document.getElementById("door2").src = imagecloseddoor2;
               document.getElementById("door3").src = imagecloseddoor3;
               break;
        case 2:document.getElementById("message1").innerHTML = "Door 2 has goat";
               document.getElementById("door1").src = imagecloseddoor1;
               document.getElementById("door2").src = goatdoor;
               document.getElementById("door3").src = imagecloseddoor3;
               break;
        case 3:document.getElementById("message1").innerHTML = "Door 3 has goat";
               document.getElementById("door1").src = imagecloseddoor1;
               document.getElementById("door2").src = imagecloseddoor2;
               document.getElementById("door3").src = goatdoor;
               break;
               
    }
    document.getElementById("bottom").innerHTML = bottom1; 
      
}
function handle_game2(arg)
{
    if(arg === 1)
    {
        do
        {
            swapdoor = ((Math.floor((Math.random() * 10) + 1)) % 3) + 1;
        }while (swapdoor === opendoor || swapdoor === selectedDoor)
        selectedDoor = swapdoor;
    }
    if(selectedDoor === prizedoor)
    {
        document.getElementById("message1").innerHTML = "!! YOU WON !!";
        document.getElementById("message2").innerHTML = "Congradulation, you walk away with cash prize.";
        document.getElementById("bottom").innerHTML = bottom3;
        same = 1;
    }
    else
    {
        document.getElementById("message1").innerHTML = "YOU LOOSE :(";
        document.getElementById("message2").innerHTML = "Try again";
        document.getElementById("bottom").innerHTML = bottom2;
    }
    switch(prizedoor)
    {
        case 1:if(same === 1)
               {
                  document.getElementById("door1").style.border = "thick solid green";
                  document.getElementById("try").innerHTML= "Play agian";
               }
               else
               {
                  document.getElementById("door1").style.border = "thick solid red";
                  document.getElementById("try").innerHTML= "Try agian";
               }
               document.getElementById("door1").src = cashdoor;
               document.getElementById("door2").src = goatdoor;
               document.getElementById("door3").src = goatdoor;
               break;
        case 2:if(same === 1)
               {
                  document.getElementById("door2").style.border = "thick solid green";
                  document.getElementById("try").innerHTML= "Play agian";
               }
               else
               {
                  document.getElementById("door2").style.border = "thick solid red";
                  document.getElementById("try").innerHTML= "Try agian";
               }
               document.getElementById("door1").src = goatdoor;
               document.getElementById("door2").src = cashdoor;
               document.getElementById("door3").src = goatdoor;
               break;
        case 3:if(same === 1)
               {
                  document.getElementById("door3").style.border = "thick solid green";
                  document.getElementById("try").innerHTML= "Play agian";
               }
               else
               {
                  document.getElementById("door3").style.border = "thick solid red";
                  document.getElementById("try").innerHTML= "Try agian";
               }
               document.getElementById("door1").src = goatdoor;
               document.getElementById("door2").src = goatdoor;
               document.getElementById("door3").src = cashdoor;
               break;
               
    }
}