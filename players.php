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
    <meta http-equip="X-UA-Compatible" content="IE-edge">
    <link rel = "stylesheet" href="main_style\css\player.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajaz/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">
    <title>Players</title>
    
</head>
<body id="back" background="main_style\images\cback.jpg">

<div class = "container">
    <input type="radio" name="slider" id="s1" checked>
    <input type="radio" name="slider" id="s2">
    <input type="radio" name="slider" id="s3">
    <input type="radio" name="slider" id="s4">
    <input type="radio" name="slider" id="s5">

    <script>

    </script>

    <div class = "cards">
        <label for="s1" id="slide1">
            <div class = "card">
                <div class = "image">
                    <img src = "main_style\images\card1.jpg" alt="">
                    <div class = "dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class = "infos">
                    <span class = "name">Nike superRen GO</span>
                    <span class = "lorem"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, deserunt! </span>

                    <a href="player_1.php" onclick="document.getElementById('click').play();" class="btn-details">details</a>
                    <audio id="click" src="main_style\images\click.wav"></audio>
                </div>
            </div>
        </label>

        <label for="s2" id="slide2">
            <div class = "card">
                <div class = "image">
                    <img src = "main_style\images\card2.jpg" alt="">
                    <div class = "dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class = "infos">
                    <span class = "name">camio superRen GO</span>
                    <span class = "lorem"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, deserunt! </span>

                    <a href="player_2.php" onclick="document.getElementById('click').play();" class="btn-details">details</a>
                    <audio id="click" src="main_style\images\click.wav"></audio>

                </div>
            </div>
        </label>

        <label for="s3" id="slide3">
            <div class = "card">
                <div class = "image">
                    <img src = "main_style\images\card3.jpg" alt="">
                    <div class = "dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class = "infos">
                    <span class = "name">cosco superRen GO</span>
                    <span class = "lorem"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, deserunt! </span>

                    <a href="player_3.php" onclick="document.getElementById('click').play();" class="btn-details">details</a>
                    <audio id="click" src="main_style\images\click.wav"></audio>
                    
                </div>
            </div>
        </label>

        <label for="s4" id="slide4">
            <div class = "card">
                <div class = "image">
                    <img src = "main_style\images\card4.jpg" alt="">
                    <div class = "dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class = "infos">
                    <span class = "name">hooper superRen GO</span>
                    <span class = "lorem"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, deserunt! </span>

                    <a href="player_4.php" onclick="document.getElementById('click').play();" class="btn-details">details</a>
                    <audio id="click" src="main_style\images\click.wav"></audio>

                </div>
            </div>
        </label>

        <label for="s5" id="slide5">
            <div class = "card">
                <div class = "image">
                    <img src = "main_style\images\card4.jpg" alt="">
                    <div class = "dots">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class = "infos">
                    <span class = "name">humans superRen GO</span>
                    <span class = "lorem"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, deserunt! </span>

                    <a href="player_5.php" onclick="document.getElementById('click').play();" class="btn-details">details</a>
                    <audio id="click" src="main_style\images\click.wav"></audio>

                </div>
            </div>
        </label>
    </div>

</div>

</body>
</html>