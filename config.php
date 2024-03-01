<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '545763724583-je2nvq97jboc0gfa2bt86u58lt97o788.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/project/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "youtube_google_login";

$conn = mysqli_connect($hostname, $username, $password, $database);

?>