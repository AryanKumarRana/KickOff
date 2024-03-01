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



<?php
$api=file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=sports&apiKey=88bbcc4261024b189f5afeb5b8da2e73");
$news=json_decode($api,true);
// $api_url = 'https://newsapi.org/v2/top-headlines?country=us&category=sports&apiKey=88bbcc4261024b189f5afeb5b8da2e73';
// $json_data = file_get_contents($api_url);
// $response_data = json_decode($json_data);
// $news = $response_data->data;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News-loadmore</title>

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



    <style>

.label {
  float: left;
}

.label h3{
  background-color: hsla(12, 98.4%, 52.2%, 0.75); 
  height:80px; 
  padding: 24px; 
  text-align: right;
}

.label marquee{
  background-color: hsla(12, 98.4%, 52.2%, 0.75); 
  height:80px; 
  padding: 24px;
}

.ribbon:after {
  content: "";
  display: table;
  clear: both;
}
</style>

</head>
<body>

<?php require '_nav.php' ?>



<div class="ribbon">
<div class="label" style="width: 24%;">
 <h3><strong>Latest Headlines </strong>|</h3>
</div>
<div class="label" id="lab" style="width: 76%;">
<marquee scrollamount="10">
 <h4>
 Bruno's still got it but Man Utd need A Lot of work  |  Klopp's Nunez dilemma: Can Liverpool afford a £64m sub?  |  What crisis?! Saudi stars CR7 & Benzema finally find form  |  Transfers LIVE: Man City to make new Matheus Nunes bid  |  What crisis?! Saudi stars CR7 & Benzema finally find form.
</h4>
</marquee>
</div>
</div>


<br>

<div class="news_content">
<table width="1033" style="margin-left: 16%; margin-top: -32%;;">
  <tr>
    <td colspan="2"><h1 class="news_app" style="text-align: center;">My News</h1></td>
  </tr>

  <?php foreach($news['articles'] as $value) {?>
  <tr style="background: #E6E8F0; border: 5px solid white;">
    <td><img src="<?=$value['urlToImage']?>" style="height: 200px; width: 200px;"/></td>
    <td><div style="padding: 10px;"><b><?=$value['title']?></b>
    <p><?=$value['publishedAt']?></p>
    <p><?=$value['description']?></p>
    <a href="<?=$value['url']?>" style="color: #FF0000;">Readmore..</a></div></td>
  </tr>
  <br>
  <?php } ?>
</table>
</div>




<!-- Your API key is: 88bbcc4261024b189f5afeb5b8da2e73 -->

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
<!-- INSERT INTO `questions` (`content`, `timeid`) VALUES ('test name', current_timestamp()); -->

<!--searchbar-->
<script src = "main_style/script/search.js"></script>

<!-- darkmode -->
<script src = "main_style/script/darkmode.js"></script>

</body>
</html>