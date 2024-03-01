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
    <title>Strength</title>

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
<div class="strength_page">
<img src="main_style/images/strength.jpg">


<br>
<h5 class="discription" style="color: hsl(12, 98%, 52%); text-align: center">Weight training is part of a comprehensive training program for football. Use this generic program for body contact football sports, including American football, Rugby, and Australian football. It does not necessarily include European football (soccer), although elements of the program could apply to soccer weight training.
</h5><br><br><br><br>
<h6> STRENGTH </h6>
<h2>
Aerobic Fitness for Football</h2>
<h5>
Football requires good aerobic fitness to provide endurance for sustained effort, strength, and even bulk, to break through or affect tackles.1 The part of the program outlined here is confined mostly to the weights and strength development part of the program.
<br>
You will need to do cardio training to develop aerobic fitness early pre-season and then build up anaerobic fitness with sprints, shuttles, and intervals to be fully prepared for the season start.
<br>
Aerobic fitness means you can jog, run, cycle, or ski for a long time at a moderate pace without getting too tired. Anaerobic fitness means you can keep going longer at high intensities before your legs and body slow down.
<br>
Both are important in football, especially if you are likely to play the whole or most of the game. When you optimize all elements of fitness—endurance, strength, and power, you can claim to be at peak fitness.
</h5><br>
<h3>
Periodized Weight Training for Football</h3>
<h5>
Periodized training breaks the year into three or four training phases, with each phase concentrating on a particular fitness development. Periodized programs provide a progressive buildup to peak fitness and performance. Each phase has different objectives and each successive phase builds on the previous one.2
<br>
A year-round football weight training program could look like the program we’ve outlined below. When we use the term “football,” we mean any of the body contact sports included in the introduction. If we mention something that doesn’t apply to your sport, just modify it appropriately.
</h5><br>
<h3>
Early Pre-Season</h3>
<h5>
   1. Emphasis is on building aerobic fitness, basic functional strength, and muscle growth, which is called “hypertrophy.”<br>
  2. Players are preparing for the season and starting to rebuild after the offseason.
</h5><br>
<h3>
Late Pre-Season</h3>
<h5>
   1. Emphasis is on building anaerobic fitness and maximum strength and power.<br>
   2. Players are working up to the start of the season and pre-season trials are imminent.
</h5><br>
<h3>
In Season</h3>
<h5>
   1. Competition is underway and players are expected to be fully functional for competition.<br>
   2. Emphasis is the maintenance of speed, aerobic and anaerobic fitness, and strength and power.<br>
   3. Emphasis is also on injury prevention, which involves training stabilizer muscles, balance, and agility.<br>
</h5><br>
<h3>
Off-Season</h3>
<h5>
   1. Emphasis is on rest and recovery with the maintenance of light activity—cross-training, light gym work. Several weeks break from serious fitness and strength training is helpful.<br>
   2. As pre-season approaches, more regular work can resume with an emphasis on building aerobic fitness once again for the pre-season training.<br>
</h5><br><br><br><br><br><br>
<h2>
Role-Specific Training for Football</h2><br><br>
<h5>
Within a generic training program for a particular sport, further specialty programs may be useful, especially in teams where members have specific roles and certain advantageous physical attributes apply.
<br>
For example, a quarterback and a defensive lineman (U.S.), or a halfback and a front-rower (rugby), will probably have a somewhat different program in the gym. One emphasizing speed and agility, and the other bulk, strength, and power.
<br>
Consider the program presented here to be an all-round program, best suited to beginners or casual weight trainers without a history of weight training for football. The best programs are always specific to an individual’s current fitness, role in the team, access to resources, and, no less important, the team coaches’ essential philosophy.
<br>
You will be best served by using the following program in conjunction with a trainer or coach. If you’re new to weight training, brush up on principles and practices with the beginner resources.
<br>
Always warm-up and cool down before and after a training session.3 A medical clearance for exercise is always a good idea at the start of the season if you have not had one previously. Now, let’s get started.
</h5><br>
<h3>
Phase 1: Early Pre-Season</h3>
<h5>
How this phase is approached will depend on whether a player is new to weight training or is coming off a season of weights. Building foundation strength means utilizing a program that works all the major muscle groups of the body.
<br>
Less-experienced weight trainers will need to start with lighter weights and fewer sets and work up to heavier weights with more sets. Start early in the season to get used to this phase if you have not used weights previously.
<br>
Repetitive sports activities can strengthen one side of the body at the expense of the other, or emphasize one or two major muscle groups with less emphasis on others.4 Inevitably, weak areas can be susceptible to injury and can perform poorly. This is not to say that your non-kicking leg has to be as “skillful” as your kicking leg, but it should be as strong.
<br>
You need to allocate sufficient training resources so that you achieve functional foundation strength in all areas including opposing muscles and left and right sides of all major muscle group areas—back, buttocks, legs, arms, shoulders, chest, and abdominals.5
<br></h5><br>
<h3>
In the early pre-season,</h3>
<h5>the foundation program encompasses a mix of endurance, strength, and hypertrophy objectives, which means that the weights are not too heavy and the sets and repetitions are in the range of 2 to 4 sets of 10 to 15 repetitions. In this phase, you build some strength, some muscle size, and endurance.
<br><br>
    Days per week: 2 to 3, with at least one rest day between sessions and a lighter week in week 4 to promote recovery and progression<br>
    Duration: 4 to 6 weeks<br>
    Reps: 10 to 15<br>
    Rest between sets: 30 to 60 seconds<br>
    Sets: 2 to 4<br>
</h5><br>
<h4>
Here are some weight training exercises for football:</h4>
<h5>
   1. Barbell squat, dumbbell squat or sled hack squat<br>
   2. Dumbbell biceps arm curl<br>
   <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/in7PaeYlhrM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
   3. Dumbbell incline bench press<br>
   4. Dumbbell triceps extension or machine pushdown<br>
   5. Lat pulldown to the front with wide grip<br>
   6. Reverse crunch<br>
   7. Romanian deadlift<br>
   8. Seated cable row<br>
</h5>
<br>
<h4>
Points to Note</h4><br>
<h5>
By trial and error, find a weight that represents a taxing lift for the last few reps of each set. If you're unsure, start with a light weight and increase it as you get stronger during the training period so that the perceived effort remains similar. Here are other important tips to keep in mind:
<br>
    Circuit training, off-field cardio, and other aerobic exercises should be added to this program where possible.6
   <br> Don't lift too heavy in this phase. The last few reps in a set should be taxing—yet without extreme effort to "failure," especially for the arm and shoulder exercises. You want the arm and shoulder prepared for work and beefed up but not overtaxed.
   <br> Stop immediately if acute pain is noticed during or after a weights exercise, and seek medical and training advice if it persists.
</h5><br>
<h3>
Phase 2: Mid Pre-Season</h3>
<h5>
In this phase, you will build strength. The fast and agile players should be careful not to bulk up too much. You have a good foundation from early pre-season workouts and now the emphasis is on lifting heavier weights in order to train the nervous system in conjunction with the muscle fibers to move bigger loads.
<br>
Building strength will also lay the foundation for the next phase, which is power development. Power is the ability to move the heaviest loads in the shortest time. Power is essentially a product of strength and speed and is an important component of a successful football skill set.7
<br><h5>
    Days per week: 2 to 3, with at least one day between sessions
    Duration: 4 to 6 weeks
    Reps: 8–12. The players relying most on speed and agility and who need the least bulk should do the lowest number of reps
    Rest in between sets: 3 to 4 minutes
    Sets: 3 to 5
</h5><br>
<h4>
Here are some Phase 2 weight training exercises for football:</h4>
<h5>
    1. Barbell bench press<br>
    2. Barbell hack squat, or barbell front squat<br>
    3. Cable lat pulldown to front with wide grip<br>
    4. Military (Overhead) Press<br>
    5. Pull-ups - 3x8 to 12 repetitions — adjust to suit your ability, weighted if necessary<br>
    6. Romanian deadlift<br>
</h5><br>
<h4>
Points to Note</h4>
<h5>
Adjust the weight so that the final few repetitions are taxing but not to complete failure. The fewer reps mean that you will be lifting heavier in this phase. Here are other important tips to keep in mind:
<br>
 <br>   Get sufficient rest between sets. You need your muscles recovered so that you can complete a heavy lifting session.
  <br>  If you are unable to recover from a session with only one rest day in between, reschedule this program to two sessions each week rather than three. Strength training can be physically and mentally demanding.
   <br> You will be sore in the muscles after these sessions. Muscle soreness or delayed onset muscle soreness (DOMS) is normal; joint pain is not.8 Be sure to monitor your arm and shoulder reactions to this phase. Back off when you feel any joint pain or discomfort.
</h5><br>
<h3>
Phase 3: Late Pre-Season to In Season</h3>
<h5>
In this phase, you build on the strength developed in Phase 2 with training that will increase your ability to move a load at high velocity. Power is a combination of strength and speed, so power training requires that you lift lighter weights than you did in the strength phase, yet with explosive intent.9
<br>
You need to rest adequately between repetitions and sets so that each movement is done as fast as possible. The number of sets can be less than Phase 1. There is no point in training like this when you're fatigued.
<br>
    Days per week: 2 to 3<br>
    Duration: 4 weeks ongoing<br>
    Reps: 8 to 10<br>
    Rest between repetitions: 10 to 15 seconds<br>
    Rest between sets: at least 1 minute or until recovery<br>
    Sets: 2 to 3<br>
</h5><br>
<h4>
Here are some Phase 3 weight training exercises for football:</h4><br>
<h5>
   1. Barbell or dumbbell hang clean<br>
   2. Barbell or dumbbell push press<br>
   3. Weighted box jump<br>
   4. Power snatch<br>
   5. Split jerks<br>
</h5><br>
<h3>
Points to Note</h3>
<h5>
In power training, it's important that you're relatively recovered for each repetition and set so that you can maximize the velocity of the movement. The weights should not be too heavy and the rest periods sufficient. Here are other important tips to keep in mind:
<br>
    At the same time, you need to push or pull reasonably heavy loads to develop power against reasonable resistance. Lift heavier than phase 1 but lighter than phase 2.
  <br>  The hang clean, deadlift, push press—require some technical ability to get right. Use a knowledgeable strength and conditioning coach, if possible, to fine-tune these lifts.
<br>
</h5><br>
<h3>
Phase 4: In Season</h3>
<h5>
Phase 4 focuses on the maintenance of strength and power. Alternate Phase 2 (Strength) and Phase 3 (Power) for a total of two sessions each week. Every fifth week, skip weight training to assist recovery.
</h5><br>
<h3>
Points to Note</h3>
<h5>
Try to allow at least 2 days between any strength session and a game, and avoid strength training on the same day as you work out on the field—or at least separate workouts morning and afternoon. Here are other important tips to keep in mind:
<br>
  <br>  Rest completely from strength training one week in five. Light gym work is OK.
  <br>  Use your judgment. Don't sacrifice ball skills training for weight work if you have limited time available.
</h5><br>
<h3>
Phase 5: Off-Season</h3><br>
<h5>
Now it's time to rest up. You need this time for emotional and physical renewal. For several weeks, forget about football and do other things. Staying fit and active with cross-training or other activities is a good idea.10 Give yourself plenty of time to recover so you can do it all again next year.
</h5><br><br><br>
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
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" name="content"
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