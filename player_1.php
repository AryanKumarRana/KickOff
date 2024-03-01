<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con) {
  die("error".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>player stats</title>
    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">
    <style>

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 30px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  margin-left: 25%;
}

.next {
  border-radius: 3px 0 0 3px;
  margin-left: 75%;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


.first_class {
    position: relative; 
    background: url('main_style/images/player_back.jpg') no-repeat;
    height: 148vh;
}


#playerstats1 {
  margin-left: 41%; 
  margin-top: 8%; 
  height: 72vh;
}
#playerstats2 {
  margin-left: 37%; 
  margin-top: 14%; 
  height: 63vh;
}
#playerstats3 {
  margin-left: 34%; 
  margin-top: 12%; 
  height: 62vh;
}



/*  */
  /* bar level */
/*  */

.bar-container {
  width: 15%;
  background-color: #ddd;
  margin-top: -5%;
  margin-left: 76%;
  border-radius: 14px;
}

.skills {
  text-align: left;
  color: white;
  padding-top: 5px;
  padding-bottom: 5px;
  border-radius: 14px;
}

.Shooting {width: 98%; background-color: red;}
.Pass {width: 90%; background-color: orange;}
.Dribble {width: 93%; background-color: green;}
.Power {width: 95%; background-color: blue;}




/*  */
  /* Table */
/*  */

p a{
        display: inline;
        color: white;
        font-size: 20px;
        font-weight: bold;
    }
    table a{
        display: inline;
        color: black;
    }
    tr:nth-child(even) {
  background-color: #f2f2f2
}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

table, td, tr, th{
  border: 2px solid #0000001c;
}





@media screen and (max-width: 600px){
  #playerstats1 {
    margin-left: 28%;
    margin-top: 2%;
    height: 400px
  }

  #playerstats2 {
    margin-left: 25%;
    margin-top: 4%;
    height: 366px;
  }

  #playerstats3 {
    margin-left: 12%;
    margin-top: 4%;
    height: 366px;
  }

  .prev, .next {
    padding: 0;
  }

  .bar-container {
    width: 48%;
    margin-top: 3%;
    margin-left: 28%;
  }

  .divider {
    margin-top: -77%;
  }
}



</style>

<script>
function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
}
</script>

</head>
<body>



<div class="first_class">
<a href="welcome.php"> 
<img src = "main_style\images\back_player.png" style="height: 8vh; width: 8vh;" alt="Back">
</a>
<div class="slideshow-container">

<div class="mySlides fade">
  <img id="playerstats1" src="main_style\images\player_1a.png" alt="">
</div>

<div class="mySlides fade">
  <img id="playerstats2" src="main_style\images\player_1b.png" alt="">
</div>

<div class="mySlides fade">
  <img id="playerstats3" src="main_style\images\player_1c.png" alt="">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div class="bar-container">
  <div class="skills Shooting">Power 95%</div> 
</div>

<div class="bar-container">
  <div class="skills Pass">Shooting 98%</div>
</div>

<div class="bar-container">
  <div class="skills Dribble">Dribbling 93%</div>
</div>

<div class="bar-container">
  <div class="skills Power">Passing 90%</div>
</div>
</div>
<div class="divider">
<div style="background: url('main_style/images/player_back2.jpg');">
<br><br><br><br>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";  
}
</script>





<p>
<div id="Page1">
        <div class="rul" style="text-align: center; color: white; font-size: 30px; font-weight: bold;">

        #7 CRISTIANO RONALDO (C)      
      </div><p style="text-align: center; font-size: 20px; font-weight: 100;">    
      <a href="#" onclick="return show('Page2','Page1');" > Trophies </a>|
      <b style="color: red; font-size: 25px;"> Player Stats. </b> |
    <a href="#" onclick="return show('Page3','Page1');"> Records </a>
</p>
<br><br>

<table style= "margin-left: 10%; background-color: #6b85b842; font-weight: bolder;">
  <tr>
    <th style="width: 12%;">Height</th>
    <td style="width: 12%;"> 1.87m (6'1")</td>
    <th style="width: 12%;">Chest</th>
    <td style="width: 12%;">43 inches</td>
    <th style="width: 12%;">Arms/Biceps</th>
    <td style="width: 12%;">14 inches</td>
  </tr>
  <tr>
    <th>Weight</th>
    <td> 183lbs </td>
    <th>Waist</th>
    <td>33 inches</td>
    <th>Muscle mass % </th>
    <td>50%</td>
  </tr>
  <tr>
    <th>Body fat % </th>
    <td>7%</td>
    <th>Thighs</th>
    <td>24 inches</td>
    <th>Shoe Size</th>
    <td>9 (US)</td>
  </tr>
</table>

</div>



<div id="Page2" style="display:none; text-align: center;">
<div class="rul" style="text-align: center; color: white; font-size: 30px; font-weight: bold;">
  #7 CRISTIANO RONALDO (C)      

      </div><p style="text-align: center; font-size: 20px; font-weight: 100;">    
  <b style="color: red; font-size: 25px;"> Trophies </b> |
    <a href="#" onclick="return show('Page1','Page2');"> Player Stats. </a>|
    <a href="#" onclick="return show('Page3','Page2');"> Records </a>


<table style= "margin-left: 30%; background-color: #6b85b842; font-weight: bolder;">
  <tr>
    <th>3X BEST FIFA MEN'S PLAYER</th>
    <td>
      <ul>
        <li> 2017- Real Madrid</li>
        <li> 2016- Real Madrid</li>
        <li> 2008- Manchester United</li>
      </ul>
    </td>
  </tr>
  <tr>
    <th>5X WINNER BALLON D'OR</th>
    <td>
      <ul>
        <li>2017</li>
        <li>2016</li>
        <li>2014</li>
        <li>2013</li>
        <li>2008</li>
      </ul>
    </td>
  </tr>
  <tr>
    <th>1X EUROPEAN CHAMPION</th>
    <td>Portugal</td>
  </tr>
  <tr>
    <th>4X UEFA BEST PLAYER IN EUROPE</th>
    <td>
      <ul>
        <li>2017- Real Madrid</li>
        <li>2016- Real Madrid</li>
        <li>2014- Real Madrid</li>
        <li>2008- Manchester United</li>
      </ul>
    </td>
  </tr>
  <tr>
    <th>1X FIFA PUSKÁS AWARD</th>
    <td>
      2009
    </td>
  </tr>
  <tr>
    <th>5X CHAMPIONS LEAGUE WINNER</th>
    <td>
      <ul>
        <li>17/18- Real Madrid</li>
        <li>16/17- Real Madrid</li>
        <li>15/16- Real Madrid</li>
        <li>13/14- Real Madrid</li>
        <li>07/08- Manchester United</li>
      </ul>
    </td>
  </tr>
  <tr>
    <th>4x GOLDEN BOOT WINNER</th>
    <td>
      <ul>
        <li>14/15- Real Madrid(48 goals)</li>
        <li>13/14- Real Madrid(31 goals)</li>
        <li>10/11- Real Madrid(41 goals)</li>
        <li>07/08- Manchester United(31 goals)</li>
      </ul>
    </td>
  </tr>
  <tr><th colspan="2">19X TOP GOAL SCORER</th></tr>
  <tr><th colspan="2">8X PLAYER OF THE YEAR</th></tr>
  <tr><th colspan="2">2X TM-PLAYER OF THE SEASON</th></tr>
  <tr><th colspan="2">1X EUROPEAN CHAMPIONSHIP</th></tr>
  <tr><th colspan="2">4X FIFA CLUB WORLD CUP WINNER</th></tr>
  <tr><th colspan="2">2X ITALIAN CHAMPION</th></tr>
  <tr><th colspan="2">3X UEFA SUPERCUP WINNER</th></tr>
  <tr><th colspan="2">1X WINNER UEFA NATIONS LEAGUE</th></tr>
  <tr><th colspan="2">1X ENGLISH FA CUP WINNER</th></tr>
  <tr><th colspan="2">2X SPANISH CUP WINNER</th></tr>
  <tr><th colspan="2">2X ENGLISH LEAGUE CUP WINNER</th></tr>
  <tr><th colspan="2">1X ITALIAN CUP WINNER</th></tr>
  <tr><th colspan="2">2X ITALIAN SUPER CUP WINNER</th></tr>
  <tr><th colspan="2">2X SPANISH SUPER CUP WINNER</th></tr>
  <tr><th colspan="2">1X PORTUGUESE SUPER CUP WINNER</th></tr>
  <tr><th colspan="2">2X ENGLISH SUPER CUP WINNER</th></tr>
</table>
</div>


<div id="Page3" style="display:none; text-align: center;">
<div class="rul" style="text-align: center; color: white; font-size: 30px; font-weight: bold;">
#7 CRISTIANO RONALDO (C)      
  </div>
<p style="text-align: center; font-size: 20px; font-weight: 100;"> 
<a href="#" onclick="return show('Page2','Page3');"> Trophies </a>|
<a href="#" onclick="return show('Page1','Page3');"> Player Stats. </a>|
<b style="color: red; font-size: 25px;"> Records </b>

<table style= "margin-left: 10%; background-color: #6b85b842; font-weight: bolder;">
  <tr>
    <th>1. FIFA all-time top scorer</th>
    <td>For nearly 17 years, Ronaldo has scored goals for fun. Every time he steps out on the pitch,<br> he has an unparalleled hunger and desire to find the back of the net. His hat-trick<br> against Tottenham Hotspur on Saturday took him to 806 career goals, thereby surpassing Josef Bican's 805 strikes.</td>
  </tr>
  <tr>
    <th>2. All-time top international goal-scorer</th>
    <td>As mentioned before, the Portuguese phenom is quite sensational for his country. But his <br>dedication to playing consistently regardless of the size of the competition is admirable.<br> The record-breaking attacker scored in the World Cup qualifying game against the Republic of Ireland to break<br> Ali Daei's record of 109 strikes.</td>
  </tr>
  <tr>
    <th>3. Oldest player to score a FIFA World Cup hattrick</th>
    <td>The FIFA World Cup is the grandest stage of all on the national level. While the 37-year-old<br> star has yet to land the trophy, he does hold a crucial record in it.</td>
  </tr>
  <tr>
    <th>4. Most Champions League goals</th>
    <td>Cristiano Ronaldo is one of the greatest goal-scorers in the game's history and performs<br> when his side needs him the most.  the Manchester United superstar has 140 goals to his name. <br>This is more than any other player and 15 more than second-placed Lionel Messi. </td>
  </tr>
  <tr>
    <th>5. Scored in most consecutive Champions League games</th>
    <td>The Portuguese legend has been brilliant at every stage of his career, but his performances<br> at Real Madrid were always of top quality. He spent his peak years at the Santiago<br> Bernabeu and won four Champions League trophies with them.</td>
  </tr>
</table>
</div>
</p>
<br><br><br><br>
</div>
</div>


</body>
</html>