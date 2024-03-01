<?php
if(!empty($_POST['content'])){
  error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con) {
  die("error".mysqli_connect_error());
}

$content = $_POST['content'];
$timeid = $_POST['timeid'];
$sql = "INSERT INTO `chatbot`.`questions` (`content`, `timeid`) VALUES ('$content', current_timestamp());";

if($con->query($sql) == true){
  echo " ";
}
else{
  echo "Error: $sql <br> $con->error";
}
$con->close();
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
    <link rel = "stylesheet" href="main_style/css/style2.css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Kick Off - Work Hard To Get Better</title>
    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">

    <!--chatbot-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--icons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--upper icons-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style type="text/css">
.auto-style1 {
	background-color: hsl(12, 98%, 52%);
	color: hsl(0, 0%, 100%);
	width: max-content;
	font-size: 30px;
	height: 100px;
	width: 100px;
	padding: 25px;
	border-radius: 50%;
	margin-block: 25px 35px;
	animation: pulse 2s ease infinite;
	margin-left: 20px;
}


<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Courier",monospace;
        }

        header{
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            height: 80px;
        }

        .intro{
            position: fixed;
            z-index: 3000;
            left: 0%;
            top: 0%;
            width: 100%;
            height: 100vh;
            background-color: #2B2D42;
            transition: 1s;
        }

        .logo-header{
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #D9DCD6;
        }

        .logo{
            position: relative;
            display: inline-block;
            bottom: -20px;
            opacity: 0;
        }

        .logo.active{
            bottom: 0;
            opacity: 1;
            transition: ease-in-out 0.5s;
        }

        .logo.fade{
            bottom: 150px;
            opacity: 0;
            transition: ease-in-out 0.5s;
        }
        @media screen and (max-width:420px){
          #hover_font{
            font-size:2rem;
            left: 30px;
          }
        }
    </style>
</style>
  </head>
  <body>

  <div class="intro">
        <h1 class = "logo-header">
            <span class="logo"><img src = "main_style\images\logo.png" height="413" width="418"></span><br>
            <span class="logo" id="hover_font">Welcome to our website</span><br>
        </h1>
    </div>
    <header>
        
    

    <?php require '_nav.php' ?>

    <script>
    const myTimeout = setTimeout(alertbox, 5000);
    function alertbox() {
      alert("First Login to our website to use all features of this website");
    }
    </script>

    <!-- Optional JavaScript -->
    <div class = "background1">
    <div id="container">
      <div id="logo">
        <img src="main_style/images/logo.png">
      </div>
      <!--div#navbar>ul>li*5>a-->
      <div id="navbar" style="left: 180px; top: 55px">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a class="active" href="#Clubs">Clubs</a></li>
          <li><a class="active" href="#News">News </a></li>
          <li><a class="active" href="#Exercises">Exercises</a></li>
          <li><a class="active" href="#Matches">Matches</a></li>
          <li><a class="active" href="#Contacts">Contacts</a></li>
        </ul>
      </div>
      <div id="image" class="kickoff">
        <img src="main_style/images/a.png ">
      </div>
      <div id="content" class="kickoff2">
        <h2>KICK OFF</h2>
        <h4 style="margin-bottom: -150px; margin-left: -0%;">SPORTS</h4>
      </div>
    </div>

    <p>
      <div class="wrapper">
        <div class="contain" style="left: -183px; top: 530px">
          <table>
            <tr>
              <th><font size="20px " color="black" >+</font></th>
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
              <th><font size="20px " color="black" >+</font></th>
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
              <th><font size="20px " color="black" >+</font></th>
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
          <footer id="Contacts">
          <table>
            <tr>
               <td>
                <div class="map">
                  <h4>Where we are?</h4>
                  <br>
                  <a href="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img src="main_style/images/loca.png" height="34" width="34"></a> &nbsp; MIET NH-58,Baghpat Road,UP-201206<br>
                <a href ="https://www.google.com/maps/dir/28.9761825,77.6430607/N.H.+58,+Delhi-Roorkee+Highway,+Baghpat+Bypass+Road+Crossing,+Meerut,+Uttar+Pradesh+250005/@28.9626661,77.5551701,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390c668fdea4d87f:0x8795def814a486e7!2m2!1d77.6410032!2d28.973047">
                  <img class="map_img" src="main_style/images/map.png" height="280px" width ="450px" style="border-radius:5px;"></a>
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
                  <a href="https://plus.google.com/+OndřejBárta-Otaku" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
               </div>
              </td>
             </tr>
          </table>
<br><br>
<hr class= "new">
  <p class="bottom"><u style= "color: white">mietians</u>, All Right Reserved.</p>
  <p class="bottom">Home <b style= "color: black">|</b> Cookies <b style= "color: black">|</b> Help</p>
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
                        <form method="POST">
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
    </header>



    <script>
        let intro = document.querySelector('.intro')
        let logo = document.querySelector('.logo-header')
        let logoSpan = document.querySelectorAll('.logo')
        window.addEventListener('DOMContentLoaded', ()=>{
            setTimeout(() =>{

                logoSpan.forEach((span, idx) =>{
                    setTimeout(()=>{
                        span.classList.add('active')
                    },(idx + 1) * 400)
                });

                setTimeout(()=>{

                    logoSpan.forEach((span, idx)=>{
                        setTimeout(()=>{
                            span.classList.remove('active');
                            span.classList.add('fade');
                        }, (idx + 1) * 50)
                    })
                },2000);

                setTimeout(()=>{
                    intro.style.top = '-100vh';
                },2300);
            })
        })
    </script>



<script src ="main_style/script/style.js"></script>

<!--chatbot-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="main_style/script/responses.js"></script>
<script src="main_style/script/chat.js"></script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<!--searchbar-->
<script src = "main_style/script/search.js"></script>

  </body>
</html>
