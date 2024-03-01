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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shooting</title>

    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href="main_style/css/style.css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--chatbot-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!--icons-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--upper icons-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    
</head>
<body>

<?php require '_nav.php' ?>
<br>
<div class= "shooting_page">
<img src="main_style/images/football_shooting.jpg" height="550" width="1100">

 <br><br><br><br>
 <h6> Shooting </h6>
<br><br>
<div id="Power" class="offset-sm-0">

<div class="row">
  <div class="column">
<div>
<iframe src="https://www.youtube.com/embed/uTCLJ4_i8o0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
<br><br>
<h2>Accuracy Finishing Football Drills</h2>
<h5>Now we go from power to accuracy. Having both in a shot would be great, but is a reality that the more power the less accuracy and vice versa.
<br>
Sometimes you need to make a very accurate finish on the side of the goal to go around the keeper.
<br>
This is crucial because, in a game, there will be more situation where you’ll need and accurate shot, rather than a powerful one.
</h5>
<h3> Accuracy finishing drills with a team </h3>
<h5>Do 1v1’s with the keeper, but start your sprint from the center of the field.<br>
This way, by the time you get to the keeper you will be a bit fatigued and it will test your decision making and composure in a more game-like realistic way.<br>
This is also trying to mimic a counter attack situation.<br>
The objective is not to dribble around the keeper, but rather to try to shoot and finishing around him (or between the legs).<br>
<h3>Tactical defensive exercises alone</h3>
<h5>Let’s have some fun with a game!<br>
Get a jacket or a cone and place it in different parts of the goal, high or low, and try to hit it doing different types of shots.<br>
This is your chance to try to hit the ball with different parts of your foot to see which is the more accurate way you can hit the target.<br>
Also, try it from different parts of the field so you can be ready to score and accurate goal from any part of the field!
</h5>
<br><br>
<iframe src="https://www.youtube.com/embed/QFJlRUy2jn0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<br><br>
<h2>Soccer Free Kick Drills</h2>
<h5>If you can become a free kick specialist in your team you’ll have more points to be unquestionable in the starting 11 squad!<br>
Nowadays, there are many fouls in the game, so you’ll have many changes to score more goals.</h5><br>
<h3>Free kick football drills with a team</h3>
<h5>In our academy we always practise strategic free kicks to be able to confuse the keeper.<br>
Put a real wall with many players and have different situations, like a player going over the ball, a player making a dummy to shot before you do it yourself, fake a cross instead of a shot and then shoot. Anything you can imagine to confuse the keeper!
</h5>
<h3>Free kick football exercises alone</h3>
<h5>Learn to take free kicks that go over the wall and test the keeper. Every player should be able to do this because it help you create the mind-foot connection to make a good strike with the ball.<br>
No need for keeper or for a wall, just image everything, and make a good shot at goal!
</h5>
<br><br>
</div>


<div class="column">

<h2>Power Shooting Soccer Drills</h2>
<h5>Power can be a very strong weapon in your game, not just with your shooting, but with everything.
<br>
If you shot is powerful enough, keeper won’t be able to react or stop your shot and you’ll be able to score goals from many different angles and distances.
</h5><br><br>
<h3>Power finishing exercises with your team</h3>
<h5>Get a winger to give a good easy high cross from the side of the field.
<br>
Then, you simply have to try to make the correct contact with the ball and hit it as hard as possible.
<br>
Keep in mind that, in a game, with a type of cross like this, you’ll want to hit the ball softer but with more technique. But here, we’re trying to improve your shot power and technique at the same time.
<br>
If you’re able to connect correctly and hard, then a normal shot where the ball is in the floor will be way easier for you!
</h5>
<h3>Power finishing exercises alone</h3>
<h5>The 5 second shot drill is great! Start in any position of the field, and shot the ball as high as possible.
<br>
Then, once the ball comes down, you have 5 seconds to shoot! The objective is to bring the ball under control quick, then dribble until second 5 and shoot as hard as possible, and of course, score a goal!
<br>
The reason this drill improves your shooting power is because you will be slightly tired of doing the control and dribbling, so you’re putting your body in a more game-like realistic situation where you will still need power to score your shot.
</h5>
<br><br>
<iframe src="https://www.youtube.com/embed/Sm-u_ESEmjE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" style="left:765px; top:1200px" allowfullscreen></iframe>
<br><br>
<h2>Long Shooting Football Drills</h2>
<h5>Sometimes, a game is too congested and needs a long distance shot to break the tie!
Long distance shots normally look scary because you don’t want to embarrass yourself by not working the keeper, but you’ll be surprised with the amount of times that keepers are not in the correct place in the goal.
So take advantadge of this!
</h5>
<h3>Long shooting soccer drills with a team</h3>
<h5>Always practice 2v2’s and 3v3’s so you can work on off-the-ball movements to try to break the defensive line and find spaces to finish.<br>
The trick is trying to score as fast as possible, from outside the area, so time the actions and see which group can achieve this!<br>
Here you’re in a hard situation with defenders covering spaces, so you’ll need to find space for yourself to find a shot and work the keeper!<br>
</h5>
<h3>Long shooting football exercises alone</h3>
<h5>Take shots from the middle of the pitch. Is that simple. Why not?<br>
This way, you’ll be able to get used to the feeling and be more aware of this when you’re in a game, so you can perhaps surprise the keeper and score for very far.<br>
Another thing we recommend you to do is to learn to shoot with a knuckleball, which is an effect on the ball that makes it move inconsistently, so you can be a nightmare for keepers and finishing for afar!<br>
</h5>
<br><br>
<iframe src="https://www.youtube.com/embed/a-WTr8rcK6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</div>
</div>
</div>
</div>




<P>
<div id="mySidenav" class="sidenav">
  <a style="background: white; border:2px solid black;" id="feed_back" >
  <button id="myButton"><img src = "main_style/images/moon.png" height= 20vh; width=20vw; alt="" id="darkm" style="display: block; margin-left: 90%;"></button>
  </a>
</div>    
</P>



<footer id="Contacts">
          <table>
            <tr>
               <td>
                <div class="map">
                  <h4>Where we are?</h4>
                  <br>
                  <a href="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img src="main_style/images/loca.png" height="34" width="34"></a> &nbsp; MIET NH-58,Baghpat Road,UP,Uttar Pradesh 201206<br>
                <a href ="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img src="main_style/images/map.png" height="280px" width ="450px" style="border-radius:5px;"></a>
               </div>
                  <div class="image22">
                <img src="main_style/images/logo.png" height="413" width="413">
                </div>
                <br><br><br><br><br><br><br><br><br><br><br>
               </td>
              <td align="left">
                <br><br>
                <nav class="upper_social">
          <ul>
              <li><a href="#">+913434343434 <i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#">+914545454545 <i class="fa fa-phone"></i></a></li>
              <li><a href="http://dribbble.com/gian_michelle">Dribbble <i class="fa fa-dribbble"></i></a></li>
              <li><a href="http://behance.net/gianm">Behance <i class="fa fa-behance"></i></a></li>
          </ul>
      </nav>

                &nbsp; &nbsp;&nbsp;
                <div class="social">
                  <a href="https://facebook.com/ondrej.p.barta" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
                  <a href="https://twitter.com/PageOnlineXS" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                  <a href="https://www.instagram.com" class="link instagram" target="_parent"><span class="fa fa-instagram"></span></a>
                  <a href="https://plus.google.com/+OndÅ™ejBÃ¡rta-Otaku" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
               </div>
              </td>
             </tr>
          </table>
<br><br>
<hr class= "new">
  <p><u style= "color: white">mietians</u>, All Right Reserved.</p>
  <p>Home <b style= "color: black">|</b> Cookies <b style= "color: black">|</b> Help</p>
</footer> 


    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-comments"></i>
        </button>

        <div class="contentss">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <form method="POST" action="chatbot_db.php">
                        <div class="chat-bar-input-block" name="timeid">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="content"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>
                          </form>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" aria-hidden = "true" class="fa fa-paper-plane"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
<script src ="main_style/script/style.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
<!--chatbot-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="main_style/script/responses.js"></script>
<script src="main_style/script/chat.js"></script>

<!--addtocart-->
<script src = "main_style/script/addtocart.js"></script>

<!--searchbar-->
<script src = "main_style/script/search.js"></script>

<!-- darkmode -->
<script src = "main_style/script/darkmode.js"></script>

</body>
</html>