<?php 
session_start();
  if(!empty($_GET['action']) && $_GET['action'] == "validation"){
    require('Controllers/ValidationController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "gettweets")){
    require('Controllers/ShowTweetsController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "saveTweet")){
    require('Controllers/SaveTweetsController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "subscribe")){
    require('Controllers/SubscribeController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "getRetweet")){
    require('Controllers/RetweetController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "saveRetweet")){
  require('Controllers/RetweetController.php');
    exit;
}

require('../twitter/views/header.php');
if (empty($_GET['action'])) {
  require('Controllers/UsersConnection.php');
} elseif($_GET['action'] == "login"){
  require('Controllers/LoginController.php');
} elseif($_GET['action'] == "register"){
  require('Controllers/UsersConnection.php');
} elseif($_GET['action'] == "home"){
  require('Controllers/HomeController.php');
} elseif($_GET['action'] == "logout"){
  require('Controllers/LogoutController.php');
} elseif($_GET['action'] == "profil"){
  require('Controllers/ProfilController.php');
}

require('../twitter/views/footer.php');
