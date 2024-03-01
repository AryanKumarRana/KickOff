<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin=true;
}
else{
  $loggedin=false;
}
$bg_color = 'white';

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">';
      if(!$loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>';
      }
      
    echo '</ul>
    <form class="form-inline my-2 my-lg-0">
    <div class="wrapper" id="sumit">
    <div class="search-input">
      <a href="" target="_blank" hidden></a>
      <input type="text" placeholder="Type to search..">
      <div class="autocom-box">
        <!-- here list are inserted from javascript -->
      </div>
      <div class="icon"><i class="fas fa-search"></i></div>
    </div>
  </div>
    </form>
  </div>
</nav>';
?>
