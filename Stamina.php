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
    <title>Stamina</title>

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
<div class= "Stamina_page">
<h6> STAMINA </h6>
<h2>Stamina Training Drills</h2><br><br><br>
<h5>
Here are some ways with which you can pump up your stamina and play the ‘beautiful game’:</h5><br>
<h4>1. Practice Specific Exercises:</h4>
<br>
    <b>Cardiovascular Exercises:</b><h5> Practice cardiovascular exercises or ‘aerobics’ (swimming, rope jumping, running, stair-stepping, jogging, skipping, cycling, rowing, etc.) at least for 30 to 50 minutes every day. It can boost stamina by increasing your aerobic capacity to a great extent (1).
</h5><br>
    <b>Circuit Training:</b><h5>  Weight-based circuit training (sit-ups, push-ups, lunges, squat jumps, etc.) can help you a lot in developing muscle strength, thereby improving your endurance (2). Exercising for 1 minute at each of the 10 to 20 stations of a circuit is considered to be enough.
</h5>   <img src = "main_style/images/Circuit-Training.jpg.webp"><br><br>


    <b>Plyometric Exercises:</b><h5>  It has been found that plyometric exercises (one leg jumps, box jumps, burpees, stair hops, and other similar quick explosive movements), especially the weighted ones, can increase the energy and resilience of a football player significantly (3).
</h5> <br><b>  Stretching: </b><h5> Stretch your body before and after exercises regularly. It will not only build your stamina, but also keep you away from injuries.
</h5>
<br><br>

 <h4> 2. Train Yourself Properly:</h4>
 <br>
    <b>Sprinting:</b><h5> It is crucial to train your body beforehand, so that you can sprint-jog-sprint during the game as fast as possible. Performing a cycle of 15-20 yards of sprinting (including the recovery time) every day can help you immensely to enhance your stamina. You can also practice sprint drills with additional resistance (wearing weighted pants or vests) to make the most of your training (4).
</h5>   <img src = "main_style/images/Sprinting.jpg.webp"><br><br>

    <b>Speed Endurance Runs:</b><h5> This particular training is necessary for increasing your capacity of moving over different distances fast and efficiently. As a result, your level of endurance will also go higher.
</h5><br>
    <b>Fartlek Training:</b><h5> This is a modified form of speed endurance run, which helps the player move for a constant duration by altering his or her speed accordingly. Being a randomized version, it gives lots of energy and stamina to the trainee.
</h5><br>
    Soccer-Ball Drill:</b><h5> It is one of the most effective stamina training options for football players. As it makes use of the football itself, you can strengthen your ball control as well as ball possession skills along with heightening endurance level.
</h5><br>  
    <img src = "main_style/images/Soccer-Ball-Drill.jpg.webp">
<br>
  <p style="color: hsl(12, 98%, 52%);"> # Did You Know?</p>
<h5><b>On an average, football players run 5.99 miles (9.65 km) per game.</b></h5>



<br><br>
<h4>
3. Consume Well-Balanced Diet:</h4>
<br><h5>
Well-balanced diet to increase stamina<br><br>
Healthy eating is undoubtedly essential for increasing stamina, be it in football or any other physical game. Strictly follow a well-balanced diet that is high in carbs, low in fats, and contains adequate protein. Eat at least 6 times (3 big and 3 small meals) or more a day to get sufficient nutrition. Stay away from junks, processed foods, sugary items, soda, etc. Also, try to indulge in real whole foods instead of having power bars, energy drinks and nutritional supplements (5).
<br><br>
<img src = "main_style/images/Consume-Well-Balanced-Diet.jpg.webp">
<br><br>
According to a study conducted with Gaelic football players, CHO, protein, and fat consumption should have a proper balance. The study found that the mean dietary intake of fat was marginally greater than the recommended intake. However, the data provides a relatively accurate macronutrient intake necessary for football players. Check out the graph below to learn more.
<br><br><br>
<p style="color: black;">Macronutrient intake of football players on various types of training</p>
<br>
<img src = "main_style\images\sports-graph.jpg">
</h5>

<br><br>
<h4>
4. Stay Hydrated:</h4>
<br><h5>
Stay hydrated to improve stamina<br><br>
Drink plenty of water to keep yourself hydrated. If your body cells get dehydrated, you will feel low on energy and it will take a toll on your stamina as well as performance. Fatigue, less frequent urination, or dark urine are some signs of dehydration. So try and consume lots of water throughout the day and keep a sufficient number of bottles with you during the match.
<br><br>
<img src = "main_style/images/Stay-Hydrated.jpg.webp">
</h5>
<br><br>
<h4>
5. Give Yourself Enough Rest:</h4>
<br><h5>
Take enough rest before two performances. Every player needs to sleep anywhere between 7 and 9 hours daily at night. Nocturnal and consolidated sleep is considered to be better than broken chunks of sleep time for your body to rejuvenate and recover completely. Proper rest and recovery will help you focus better and get enough stamina to perform optimally the next day (6).
</h5><br><br>
<h4>
6. Do Not Over-Practice:</h4>
<br><br><h5>
While perseverance and determination to practice are essential in sports, remember not to over-train yourself. If you exercise a lot or practice each and every day, you will be totally drained out of energy and are more prone to injury, affecting your level of stamina considerably. It is vital that you take at least a couple of days off in the span of one week.6. Do Not Over-Practice:
<br><br>
While perseverance and determination to practice are essential in sports, remember not to over-train yourself. If you exercise a lot or practice each and every day, you will be totally drained out of energy and are more prone to injury, affecting your level of stamina considerably. It is vital that you take at least a couple of days off in the span of one week.
</h5><br><br>
<h4>
7. Be Positive:</h4>
<br><br><h5>
Always think positive and take positive steps to reduce mental stress. Mental fatigue and stress can reduce your stamina (7). So, keep self-motivating and be positive and see your stamina and performance improve
</h5><br><br>
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
                  <img src="main_style/images/loca.png" height="34" width="34"></a> &nbsp; <div class="map_add"> MIET NH-58,Baghpat Road,UP,Uttar Pradesh 201206</div><br>
                <a class="map_img" href ="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
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
<script src ="main_style/script.js"></script>

<!--searchbar-->
<script src = "main_style/script/search.js"></script>

<!-- darkmode -->
<script src = "main_style/script/darkmode.js"></script>

</body>
</html>