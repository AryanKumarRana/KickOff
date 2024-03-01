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
$database = "users";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con) {
  die("error".mysqli_connect_error());
}
?>




<?php
error_reporting(E_ERROR);
if($_SERVER["REQUEST_METHOD"] == "POST"){
$server = "localhost";
$username = "root";
$password = "";
$database = "kickoff_feedback";


$message = $_POST["message"];
$contact_no = $_POST["contact_no"];

$conn = mysqli_connect($server, $username, $password, $database);
$sql = "INSERT INTO `kickoff_feedback`.`feedback` (`message`, `contact_no`, `emoji`, `time`) VALUES ('$message', '$contact_no', '$emoji', current_timestamp());";
mysqli_query($conn, $sql);


  // if($conn->query($sql) == true)
  // {
  //     echo "Successfully inserted";
  // }
  // else{
  //     echo "ERROR: $sql <br> $conn->error";
  // }
  // $con->close();
  }
?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <!-- exercises box-->
    <link rel="stylesheet" href="main_style/css/exbox.css">

    <!-- cat walk -->
    <link rel = "stylesheet" href = "main_style\css\catwalk.css">

    <!-- external for alert box -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <title>Kick Off - Work Hard To Get Better</title>
    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">
    
    </head>
  <body id="myBtn">
      <!-- The Modal -->
    <div id="myModal" class="modal">
    
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <img src = "main_style/images/green_tick.png">
      <p>"Welcome - <?php echo $_SESSION['First_Name']?>"</p>
      <button id="button">OK</button>
      <!-- <div id="rootttt">
    <div class="containerrrr move">
        <div class="cat walk-than-run"></div>
    </div> -->
</div>
    </div>
    </div>
    <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    btn.onload= function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }
    button.onclick = function() {
      modal.style.display = "none";
    }
    </script>
     
    
    <?php require '_nav.php' ?>

    <!-- Optional JavaScript -->
    <div class = "background1">
    <div id="container">
      <div id="logo" style="left: 1%; top: 12px">
        <img src="main_style/images/logo.png" height="213" width="218">
      </div>
      <!--div#navbar>ul>li*5>a-->
      <div id="navbar" style="left: 180px; top: 55px">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a class="active" href="#Clubs">Clubs</a></li>
          <li><a class="active" href="#Exercises">Exercises</a></li>
          <li><a class="active" href="matches.php">Matches</a></li>
          <li><a class="active" href="#News">News </a></li>
          <li><a class="active" href="#Contacts">Contacts</a></li>
        </ul>
      </div>
      <div id="image" >
        <img src="main_style/images/a.png ">
      </div>
      <div id="content">
        <h2>KICK OFF</h2>
        <h4>SPORTS</h4>
        <!-- <p style="color: white;">things left to update in this website:<br>0. animation using macromedia flash 8, 1. chatbot, 2. newsapi, <br>5. responsive, 6. cookies, <br>7. google/facebook login(oAuth)</p> -->
      </div>
    </div>

    <p>
      <div class="wrapper">
        <div class="contain" style="left: -183px; top: 530px">
          <table>
            <tr>
              <th><font size="20px">+</font></th>
              <th><span class="num" data-val="100">000</span></th>
            </tr>
            <tr>            
              <th> </th>
              <th><span class="text">Clubs</span> </th>
            </tr>
          </table>
        </div>
        <div class="contain" style="left: -420px; top: 530px">
          <table>
            <tr>
              <th><font size="20px">+</font></th>
              <th><span class="num" data-val="150">000</span></th>
            </tr>
            <tr>            
              <th> </th>
              <th><span class="text">Members</span> </th>
            </tr>
          </table>
        </div>
        <div class="contain" style="left: -660px; top: 530px">
          <table>
            <tr>
              <th><font size="20px">+</font></th>
              <th><span class="num" data-val="550">000</span></th>
            </tr>
            <tr>            
              <th> </th>
              <th><span class="text">Traffic</span> </th>
            </tr>
          </table>
        </div>
      </div>
    </p>
    </div>

    <br><br><br><br><br>    <br><br><br><br><br>

    <div class="text-block"></div>
    <div class="parent">
        <img class="image1" src="main_style/images/about-circle-one.png" />
        <img class="image2" src="main_style/images/about-circle-two.png" />
        <img class="image3" src="main_style/images/ronaldo8.png" />
    </div> 

    <div class = "ro_im_text">
      <h1 class = "ro_im_text0">ABOUT US</h1><br>
      <h2 class = "ro_im_text1">Welcome to our <br>website</h2>
      <h3 class = "ro_im_text2">Here you can find any football club according to your choice and<br><br> here we give you full freedom of verifying any mention club<br><br> by details provided by us</h3>

    </div>

<br><br><br><br><br>
<div class = "conta_1">
<div class = "conta">

<h1 class = "ro_im_text0" style="margin-left: 510px;">CLUBS</h1><br>
<h1 class = "heading">--CLUBS--</h1><br><br>

<div class = "box-container" id="Clubs">

</div>
<div class = "popup" id = "popup-1">
            <div class = "overlay"></div>
            <div class = "content">
            <div class = "closebtn" onclick = "delElement()">&times;</div>

            <div class = "head"><p>Football Clubs</p></div>
            <div id = "cartItem"></div>
        </div>
    </div>

<div id="load-more"> load more </div>

</div>
</div>
<br><br><br><br><br>
<div class="image_front">
<h2>&nbsp;What they</h2><br><br>
<h3>&nbsp;&nbsp;SAY ABOUT US</h3><br><br>
	<p>&nbsp;&nbsp;i made the right choice by choosing the fitclub and by choosing and this is the <br><br>
  &nbsp;&nbsp;the right plan and progress i already achieved my ideal body and this can be the only<br><br>
  &nbsp;&nbsp;the right plan and progress i already achieved my ideal body and this can be the only</p>
  <a href="https://www.instagram.com/aryan_rana9703/"><i>&nbsp;&nbsp;ARYAN KUMAR RANA :</i>
<u>Programmer(website editor) </u></a>
</div>
<div class="slideshow-container" style="left:0; top: -350px">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="main_style/images/cl1.jpg" style="width:100%; height:300px;">
  <div class="text">"If footbally."</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="main_style/images/cl2.avif" style="width:100%; height:300px;">
  <div class="text">"Don't </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="main_style/images/cl3.jpg" style="width:100%; height:300px;">
  <div class="text">"We didn't "</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="main_style/images/cl4.jpg" style="width:100%; height:300px;">
  <div class="text">"I learned ."</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="main_style/images/cl5.jpg" style="width:100%; height:300px;">
  <div class="text">"As long ."</div>
</div>

</div>
<br>

<div class="dots">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
</div>
<!-- <br><br><br> -->




<!-- Animation -->

<!-- <section>
  <div class="containerrrrr">
    <div class="background-img">
      <div class="boox">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="contenttt">
          <u><h2 style="text-align:center; font-size:30px;"><b>Animations</b></h2></u>
          <p><a>
            <button id="animoo" onclick="toggleCat()">&nbsp;Ronaldo 7 <img src="main_style\images\ronaldo-icon.png"></button>
            <button id="animoo" onclick="messi()" style="margin-left: 174px;">Messi 10 <img src="main_style\images\messi-icon.png"></button><br><br><br><br><br><br>
            <button id="animoo" onclick="neymar()" style="height: 7.8vw">Neymar 10 <img src="main_style\images\neymar-icon.png" style="height: 4vw; width: 4vw;"></button>
          </a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<audio id="suiii" src="main_style\images\SUIII.mp3"></audio>
<audio id="mess" src="main_style\images\messi.mp3"></audio>
<audio id="ney" src="main_style\images\neymar.mp3"></audio>


<div id="slowCat" class="containerrrr move" style="display: none;">
<div class="cat walk-than-run"></div>
</div>
    <script>
        function toggleCat(){
            var div= document.getElementById("slowCat");
            var snd= document.getElementById("suiii");
            if(div.style.display==="none"){
                div.style.display="block";
                snd.currentTime = 0
                snd.play();
                console.log("blue");
            }
            else{
                div.style.display="none";
                snd.pause();
                console.log("neon");
            }
          } 

          function messi(){
            var div= document.getElementById("slowCat");
            var snnd= document.getElementById("mess");
            if(div.style.display==="none"){
              div.style.display="block";
              snnd.currentTime = 0
              snnd.play();
            }
            else{
              div.style.display="none";
              snnd.pause();
            }
          }
          
          function neymar(){
            var div= document.getElementById("slowCat");
            var snnnd= document.getElementById("ney");
            if(div.style.display==="none"){
              div.style.display="block";
              snnnd.currentTime = 0
              snnnd.play();
            }
            else{
              div.style.display="none";
              snnnd.pause();
            }
          }
    </script>


 -->



<!-- GLOBAL FOOTBALL RANKINGS -->

<div id = "ranking" class = "rule">  <!-- 28%-->
<h1 class = "ro_im_text0">RANKINGS</h1>
      <div class="rul">
        Global Football Rankings
      </div><br>
    <div class="rul2"> 
        football Leagues
    </div><br><br>
    <p class="rul3"><br>
    Which domestic league in world football is the best? <br>

That question can lead to a debate that may never end based on national pride and the aesthetics of the game in each country.<br>

Instead of having a debate on which league looks best while watching it, we decided to delve into some of the statistics that <br>

matter most to the game and create a ranking based off of that system... <a href="Leagues.php">Load More</a>
    </p>
</div>



<section class="section video" aria-label="video">
        <div class="container" id="Video">

          <div class="video-card has-before has-bg-image"
            style="background-image: url('main_style/images/f.jpg')">

            <h2 class="h2 card-title">Explore Fitness Life</h2>
            <a href = "#Video" onclick = "toggle();">
            <button class="auto-style1" aria-label="play video" style="left: -18px; top: -1px">
              <ion-icon name="play-sharp" aria-hidden="true">
               <div class="fa fa-play"></div>
              </ion-icon>
           </button>
          </a>
          <div id ="scrollPlaceHolder">
          <div class = "trailer" id="trailer2">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/uhdPsk4KbcA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
          <img src="main_style/images/close.png" height="34" class="video_close" onclick="toggle();">
    </div>
</div>

            <a href="https://www.youtube.com" class="btn-link has-before">Watch More</a>

          </div>

        </div>
    </section>
    <script type="text/javascript">
        function toggle()
        {
            var trailer = document.querySelector(".trailer")
            var video = document.querySelector("video")
            trailer.classList.toggle("active");
            video.pause();
            video.currentTime = 0;
        }
    </script>






    <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
        style="background-image: url('./assets/images/classes-bg.png')">
        <div class="container" id="Exercises">

          <p class="section-subtitle">EXERCISES</p>

          <h2 class="h2 section-title text-center">Fitness Classes For Every Goal</h2>

          <ul class="class-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="width: 416; height: 240;">
                  <img src="main_style/images/strength.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="main_style/images/class-icon-1.png" width="27" height="30" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="strength.php" class="card-title">Strength Training</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Weight training is part of a comprehensive training program for football. Use this generic program for body contact football sports...                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">85%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 85%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="width: 416; height: 240;">
                  <img src="main_style/images/cardio.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="main_style/images/class-icon-2.png" width="25" height="30" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="cardio.php" class="card-title">Stretching and Cardio</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Distance Running: Long distance running is a classic endurance exercise that can help you build stamina and cardiovascular fitness...                 </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">70%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="width: 416; height: 240;">
                  <img src="main_style/images/football_shooting.jpg" width="416" height="240" loading="lazy" alt="Power Yoga"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="main_style/images/class-icon-3.png" width="26" height="24" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="shooting.php" class="card-title">Shooting Drills</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Learn how to improve your shooting in soccer.<br>
                  Included, the best finishing training drills used by the top academies...                  
                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">90%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 90%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="class-card">

                <figure class="card-banner img-holder" style="width: 416; height: 240;">
                  <img src="main_style/images/sprinting1.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="title-wrapper">
                    <img src="main_style/images/class-icon-4.png" width="29" height="28" aria-hidden="true" alt=""
                      class="title-icon">

                    <h3 class="h3">
                      <a href="Stamina.php" class="card-title">Stamina Drills</a>
                    </h3>
                  </div>

                  <p class="card-text">
                  Here are some ways with which you can pump up your stamina and play the ‘beautiful game’. On an average, football players run 5.99 miles per game...

                  </p>

                  <div class="card-progress">

                    <div class="progress-wrapper">
                      <p class="progress-label">Class Full</p>

                      <span class="progress-value">60%</span>
                    </div>

                    <div class="progress-bg">
                      <div class="progress-bar" style="width: 60%"></div>
                    </div>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

<br><br>
<div class="player_stats">
  <a href="players.php">
    <img src = "main_style\images\welcome_playersStats.jpg" alt=" ">
  </a>
</div>


<div class = "rule" id="Rules">
<h1 class = "ro_im_text0">RULES</h1>
      <div class="rul">
       Rules of the football
        </div><br>
    <div class="rul2"> 
        football club
    </div><br><br>
    <p class="rul3">
        Rules update every year in football or any sports. There are is a long list of rules and for every thing. 
    <br>
        There are litterally very strickt rules and should be followed, if not then there is a penalty when any rule break
    <br>
        If you want to see all the rules then click on it <a href="main_style\images\rules.pdf"> Rules</a>
    </p>
</div>
    <br>





<div class="contai">

<h1 class = "ro_im_text0" style="margin-left: 520px;">NEWS</h1>
<h1 class="heading">Daily World News</h1>

<div class="box-container" id="News">

   <div class="box">
      <div class="image">
         <img src="main_style\images\img-1.jpg" alt="">
      </div>
      <div class="conten">
         <h3>what’s going on at Arsenal?...</h3>
         <p>Transfer gossip, including the latest on Paul Pogba's future at Manchester...</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i>
            <script> let currentDate = new Date().toJSON().slice(0,10); document.write(currentDate); </script>
            </span>
            <span> <i class="fas fa-user"></i> by News Api </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="main_style/images/img-2-1.avif" alt="">
      </div>
      <div class="conten">
         <h3>Saudi champions and karim...</h3>
         <p>Saudi champions Al Ittihad sign 'global football icon' Karim Benzema...</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i>
            <script>document.write(currentDate);</script>
          </span>
          <span> <i class="fas fa-user"></i> by News Api </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="main_style\images\img-3.jpg" alt="">
      </div>
      <div class="conten">
         <h3>Manchester Evening News...</h3>
         <p>Manchester United transfer news RECAP plus Harry Kane latest and Casemiro decision...</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i>
            <script>document.write(currentDate);</script>
          </span>
          <span> <i class="fas fa-user"></i> by News Api </span>
         </div>
      </div>
   </div>

</div>

<a href="newsApi.php"><div id="load-moree">load more</div></a>

</div>



<br><br><br><br>



<P>
<div id="mySidenav" class="sidenav">
  <a style="top: 310px;" id="feed_back"><button id="myButton">Feedback</button></a>
</div>    
  <div id="myPopupk" class="popupk">
      <div class="popupk-content">
        <div class="feed my-4">
            <form action="welcome.php" method="post">
              <div class="feed-group">
                <button id="closePopupk">
                <!-- <span class="closed">&times;</span> -->
                </button>
                <label for="message">Feedback</label>
                <textarea cols="30" rows="10"  type="text" style="height: calc(5.5em + 1.75rem + 4px);" class="form-control" id="message" name="message" aria-describedby="emailHelp" placeholder="enter any other information here"></textarea>
              </div>
              <div class="feed-group">
                <label for="contact_no">Phone no.</label>
                <input type="number" class="form-control" id="contact_no" name="contact_no" aria-describedby="emailHelp" placeholder="enter your phone number">
              </div>

            <div class="app">
              <div class="expression">
                <div class="emojie">
                  <label for="0">
                  <input class="radio" type="radio" name="emoji" id="0" value="0">
                  <span>🤬</span>
                </label>
                </div>
            
                <div class="emojie">
                  <label for="1">
                  <input class="radio" type="radio" name="emoji" id="1" value="1">
                  <span>🙁</span>
                </label>
                </div>
            
                <div class="emojie">
                  <label for="2">
                  <input class="radio" type="radio" name="emoji" id="2" value="2">
                  <span>😶</span>
                </label>
                </div>
            
                <div class="emojie">
                  <label for="3">
                  <input class="radio" type="radio" name="emoji" id="3" value="3">
                  <span>😁</span>
                </label>
                </div>
            
                <div class="emojie">
                  <label for="4">
                  <input class="radio" type="radio" name="emoji" id="4" value="4">
                  <span>😍</span>
                </label>
                </div>
              </div>
            </div>
              <button type="submit" class="btn btn-primary" id="myButtton">Submit</button>
            </form>
        </div>
      </div>
  </div>
      </P>
      <script>
        myButton.addEventListener("click", function () {
                    myPopupk.classList.add("show");
                });
                closePopupk.addEventListener("click", function () {
                    myPopupk.classList.remove("show");
                });
                window.addEventListener("click", function (event) {
                    if (event.target == myPopupk) {
                        myPopupk.classList.remove("show");
                    }
                });
                    </script>




<P>
<div id="mySidenav" class="sidenav">
  <a style="background: white; border:2px solid black;" id="feed_back" >
  <button id="myButton"><img src = "main_style/images/moon.png" height= 20vh; width=20vw; alt="" id="darkm" style="display: block; margin-left: 90%;"></button>
  </a>
</div>    
</P>







<a href="#top">
<div class="stage">
    <div>
        <img src="main_style\images\top.png" class="ball bounce-6">
    </div>
</div>
</a>
</p>

<footer id="Contacts">
          <table>
            <tr>
               <td>
                <div class="map" style="right: 35%; margin-top: -3%; position: absolute;">
                  <h4>Where we are?</h4>
                  <br>
                  <a href="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img src="main_style/images/loca.png" height="34" width="34" style="margin-bottom: -23px;"></a> &nbsp; MIET NH-58,Baghpat Road,UP-201206<br>
                <a href ="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img src="main_style/images/map.png" height="280px" width ="450px" style="border-radius:5px;"></a>
               </div>
                  <div class="image22">
                <img src="main_style/images/logo.png">
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
                  <a href="https://www.facebook.com/aryan_rana9703/" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
                  <a href="https://www.twitter.com/aryan_rana9703/" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                  <a href="https://www.instagram.com/aryan_rana9703/" class="link instagram" target="_parent"><span class="fa fa-instagram"></span></a>
                  <a href="https://plus.google.com/aryan_rana9703/" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
               </div>
            
              </td>
             </tr>
          </table>
         
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
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="content"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" aria-hidden = "true" class="fa fa-paper-plane"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>
                        </form>

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

<!-- Load-more-->
<script src = "main_style/script/load_more.js"></script>

<!--image_changer-->
<script src = "main_style/script/image_changer.js"></script>

<script src = "https://kit.fontawesome.com/92d70aaaa2fd8.js" crossorigin = "anonymous"></script>

<!--searchbar-->
<script src = "main_style/script/search.js"></script>

<!-- darkmode -->
<script src = "main_style/script/darkmode.js"></script>

</body>
</html>
