<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $First_Name = $_POST["First_Name"];
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
    $sql = "SELECT * FROM users WHERE username='$username'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    //num means Account that user have
    if ($num == 1){
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['First_Name'] = $First_Name;
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            }
            else{
                $showError = "Invalid Credentials";
            }
        }
       
    } 
    else{
        $showError = "Invalid Credentials";
    } 
}
    
?>





<?php 
//it will turn off all the errors and warnings showing on page.
error_reporting(E_ERROR);
// //Set the cookie
// setcookie("button_clicked", "true", time()+3600, "/");

// //Return a response to the Javascript function
// echo "Cookie has been set.";


$server = "localhost";
$username = "root";
$password = "";
$database = "kickoff_cookies";

//connect to the database
$conn = mysqli_connect($server, $username, $password, $database);
$_Server= isset($_Server);
//Get the user's IP address
$user_id = $_Server['REMOTE_ADDR'];
//IP address
$user_id = hash('sha256',$_SERVER['HTTP_USER_AGENT']);
//Generate a unique session ID
// $session_id = md5(uniqid());
$username = $_POST["username"];
//insert the session ID into the database 
$sql = "INSERT INTO kickoff_cookies . sessionss (id, username, user_id, dt) VALUES ('$id', '$username', '$user_id', current_timestamp());";
mysqli_query($conn, $sql);
//Set the session ID as a cookie
// setcookie( $user_id, "hash_ip", time()+3600, "/");
//display a message that the cookie has been set
// echo "cookie has been set. </br>";
// echo 'USER IP ADDRESS - '.$_SERVER['REMOTE_ADDR'];

 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="main_style/images/fav2.png" height="16px" width="16px">

    <!--cookie allow box -->
    <link rel = "stylesheet" href = "main_style\css\style.css">

     <!-- external for alert box -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        .signup_button{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #myButton{
            margin-left:46%;
        }

        @media screen and (max-width:640px) {
            #myButton{
                margin-left:40%;
            }
            .text-center{
                font-size: 2rem;
            }
            form{
                padding-top: 8%;
            }
        }
    </style>

  </head>
  <body id="myBtn">
    <br><br>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
     <h1 class="text-center">Login to our website</h1>
     <form action="login.php" method="post">
        <div class="form-group">
            <label for="First_Name">First_Name</label>
            <input type="text" class="form-control" id="First_Name" name="First_Name" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="@gmail.com" Required>
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" Required>
        </div>
        <button type="submit" class="btn btn-primary" id="myButton">Login</button>
     </form><br><br>
     <h5 class="discription">Don't have an account?</h5><a href = "signup.php"><h5 class="signup_button" style="color: #007bff; text-decoration: none;">Sign up</h5></a>
     <br><br>
     <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
     
            <div style="background-color: #358fef; text-decoration: none; height: 46px; width: 312px; border: 1px solid #358fef; border-radius: 4px; display: flex; flex-direction: row;" >
                <div style="height: 44px; width: 47px; border: 2px solid #358fef; background:white; display: flex; flex-direction: row; align-items: center; justify-content: center;">
                    <img src="main_style\images\google.png" style="height: 31px; width: 31px; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                </div>
                <div style="color: white; font-size: 20px; display: flex; flex-direction: row; padding-top: 8px; padding-left: 33px;">
                    Log in with Google
                </div>
            </div>

        </div>
</div>


   






<!-- The Model -->
<div id="myModel" class="model" style="margin-top: -524px; z-index: 173; position: relative;">
    
    <!-- Modal content -->
    <div class="model-content">
      <span class="closee">&times;</span>
      <p>"Allow Cookies"</p><br><br><br>
      <button id="cancel" class="buttton">Cancel</button>
      <button style="margin-left:55%;" id="ok" class="buttton">Okay</button> 
      <!-- <div id="rootttt">
    <div class="containerrrr move">
        <div class="cat walk-than-run"></div>
    </div> -->
</div>
    </div>
    </div>



 <script>

        // document.getElementById("myButton").addEventListener("click", function(){
        //     //Call the PHP script to set the cookie 
        //     var xhr = new XMLHttpRequest();
        //     xhr.open("GET","setcookie.php", true);
        //     xhr.send();
        // });
        var user_id = "<?php echo $_SERVER['REMOTE_ADDR']; ?>";
        //Add a click event listner to the button 
        
        var model = document.getElementById("ok").addEventListener("click",function(){
            //Code to be executed when ok button is clicked
            document.cookie = user_id + "=button_clicked; expires = Fri, SameSite = None, 31 Dec 9999 23:59:59 GMT; path=/";
        });
        
        var model = document.getElementById("cancel").addEventListener("click",function(){
            //Code to be executed when cancel button is clicked
        });


    // Get the model
    var model = document.getElementById("myModel");
    
    // Get the button that opens the model
    var buttton = document.getElementById("myBtn");
    
    // Get the <span> element that closes the model
    var span = document.getElementsByClassName("closee")[0];
    
    buttton.onload= function() {
      model.style.display = "block";
    }


    
    // When the user clicks on <span> (x), close the model
    span.onclick = function() {
    model.style.display = "none";
    }
    ok.onclick = function() {
      model.style.display = "none";
    }
    cancel.onclick = function() { 
        model.style.display = "none";
    }

</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
