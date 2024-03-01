<?php

$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $First_Name = $_POST["First_Name"];
    $Last_Name = $_POST["Last_Name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;

    //$exists==false
    if(($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `First_Name`, `Last_Name`, `username`, `password`, `dt`) VALUES ('$First_Name', '$Last_Name', '$username', '$hash', current_timestamp())";
        try{
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
           }
        }catch(Exception $e){
            $showError = "This email is already registered. Try to login or signup with other account";
        }

    }
    else{
        $showError = "Passwords do not match";
    }
}
  
?>





<?php
error_reporting(E_ERROR);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
if($result){
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'aryankumar82186@gmail.com';
    $mail->Password = 'ixrf dbtm pqpn vocz ';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('aryankumar82186@gmail.com');
    $mail->addAddress($_POST["username"]);
    $mail->isHTML(true);
    $mail->Subject = "Kickoff";
    // $mail->Body = $_POST["message"];
    $mail->Body = "Thankyou for signup to our website! ".$_POST["First_Name"]." ".$_POST["Last_Name"];
    $mail->AddAttachment('main_style\images\thankyou.png');
    $mail->send();

    // echo

    // '<script>
    // alert("Sent Successfully");
    // document.location.href = "a.php";
    // </script>';

    echo
    '<script>
    console.log("sucessfully send");
    </script>';

}
}
?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel = "stylesheet" href="main_style/css/style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">

    <style>
        .discription{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            padding-top: 5%;
            padding-left: 10%;
            padding-right: 10%;
        }
        .login_button{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button{
            margin-left:46%;
        }
        @media screen and (max-width:640px) {
            button{
                margin-left:40%;
            }
            .text-center{
                font-size: 2rem;
                padding-top: 4%;
            }
            form{
                padding-top: 8%;
            }
        }
    </style>
  </head>
  <body>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Signup to our website</h1>
     <form action="signup.php" method="post">
        <div class="form-group">
            <label for="First_Name">First Name</label>
            <input type="text" class="form-control" id="First_Name" name="First_Name" aria-describedby="emailHelp" Required>
            
        </div>
        <div class="form-group">
            <label for="Last_Name">Last Name</label>
            <input type="text" class="form-control" id="Last_Name" name="Last_Name" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="@gmail.com" Required>
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" Required>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" Required>
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
        <button type="submit" class="btn btn-primary" name="send">SignUp</button>
     </form><br><br>
     <h5 class="discription" >Already have an account?</h5><h5 class="login_button" style="font-color: blue"><a href = "login.php">Login</a></h5>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
  </body>
</html>
