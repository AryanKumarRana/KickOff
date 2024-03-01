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
    <title>Cardio & Stretches</title>

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
<div class="cardio_page">
<img src="main_style/images/cardio.jpg">
<br><br>
<div>
<h6> CARDIO </h6>
<h2>Cardio Workouts for Football Fitness:</h2><br>

<h4>Distance Running:</h4><h5> Long distance running is a classic endurance exercise that can help you build stamina and cardiovascular fitness. Consider going for a steady-paced run for 30 minutes or more to improve your aerobic capacity.</h5>
<br>
<h4>Interval Sprints:</h4><h5> Interval sprints involve alternating periods of high-intensity running with periods of rest or low-intensity activity. This type of training can help improve your speed and endurance. Consider running at your maximum speed for 30 seconds to a minute, followed by 30 seconds to a minute of rest or low-intensity activity, and then repeating the cycle for several rounds.</h5>
<br>
<h4>Hill Repeats:</h4><h5> Hill repeats involve running up a steep hill or incline, then walking or jogging back down to the starting point and repeating the cycle several times. This type of training can help improve your leg strength and power, as well as your cardiovascular fitness.</h5>
<br>
<h4>Fartlek Training:</h4><h5> Fartlek is a Swedish term for “speed play.” It involves alternating periods of fast running with periods of slower running or jogging. This type of training can help improve your speed, endurance, and cardiovascular fitness, plus it gives you different ‘gears’ to use when needed.</h5>
<br>
<h4>Tempo Runs:</h4><h5> Tempo runs involve running at a steady pace that is slightly faster than your normal pace for an extended period of time. This type of training can help improve your lactate threshold, which is the point at which your body begins to produce more lactic acid than it can clear, leading to fatigue. We will explore lactate threshold training in more detail in another post.</h5>
<br>
<h4>Pyramid Intervals:</h4><h5> Pyramid intervals involve gradually increasing and then decreasing the intensity of your running. For example, you might start with a one-minute sprint, followed by a 30-second rest, then a two-minute sprint, followed by a one-minute rest, and so on, until you reach your maximum intensity, and then gradually decrease the intensity back down to your starting point.</h5>
<br>
<h4>Stair Running:</h4><h5> Running up and down stairs can be an effective cardiovascular exercise that also helps improve leg strength and power similar to hill repeats. Consider finding a set of stairs, then running up and down them for several rounds.</h5>
<br>
<h4>Cross-Country Running:</h4><h5> Cross-country running involves running on varied terrain, such as trails or fields, and can help improve your endurance and balance. Consider finding a local park or nature reserve with varied terrain to incorporate cross-country running into your training program.</h5>
<br>
<h4>Beach Running:</h4><h5> Running on sand can be an effective cardiovascular exercise that also helps improve leg strength and power. Consider finding a local beach with a long stretch of sand to incorporate beach running into your training program. If you’ve run on sand before you will know how taxing it is.</h5>
<br>
<h4>Treadmill Running:</h4><h5> While running outdoors is typically preferred, treadmill running can be a convenient option for indoor workouts and allows you to carefully manage pace, time, rest periods and more. Consider using the treadmill for interval sprints, tempo runs, or hill repeats with the incline set high to improve your cardiovascular fitness.</h5>
<br><br>

<h6> STRETCHES </h6>

<h2>Stretches For Football Players</h2><br>

<h5>Your football warm up should not take the form of kicking balls at full power towards your goalkeeper. Instead, you should follow a series of football warm up exercises and stretches that will prepare all your muscles for the action ahead.
<br>
A well-constructed program of football warm up drills should consist of a few minutes of jogging to raise your heart rate, body temperature and increase the blood flow to your muscles. This should be followed by dynamic stretching (stretching on the move) to improve mobility and flexibility.
<br><br>
This portion of the football warm up might include:
<br>
    1. Walking lunges<br>
    2. Heel kicks<br>
    3. Linear knee raises<br>
    4. Squats<br>
    5. Calf stretches<br>
    6. Side steps<br>
    7. Thoracic spine rotations<br>
    8. Leg swings<br>
    9. Carioca<br>
   10. Over the gate<br>
<br><br>
As your football warm-up progresses, you should gradually increase the intensity of the exercises by introducing short sprints and fast-foot drills where you alternate between jogging for ten metres and rapidly taking as many steps as possible over the next ten metres. Further excellent examples that you can introduce to offer variation include skipping, zig-zag running, side shuffles, hopping, and jumping.
<br><br>
 
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
<script src ="main_style/script/addtocart.js"></script>

<!--searchbar-->
<script src = "main_style/script/search.js"></script>

<!-- darkmode -->
<script src = "main_style/script/darkmode.js"></script>

</body>
</html>