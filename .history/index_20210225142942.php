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
} elseif(!empty($_GET['action']) && ($_GET['action'] == "unsubscribe")){
  require('Controllers/UnSubscribeController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "saveRetweet")){
  require('Controllers/SaveRetweetController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "getRetweets")){
  require('Controllers/ShowTweetsController.php');
  exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "getMessages")){
  require('Controllers/ShowMessageController.php');
    exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "SearchMember")){
  require('Controllers/SearchMemberController.php');
  exit;
} elseif(!empty($_GET['action']) && ($_GET['action'] == "LikeController")){
  require('Controllers/LikeController.php');
  exit;
} elseif(!empty($_GET['action']) && ($_GET['action']) == "editProfil"){
  require('Controllers/editProfilController.php');
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
} elseif($_GET['action'] == "searchBar"){
  require('Controllers/SearchBarController.php');
} elseif($_GET['action'] == "tendance"){
  require('Controllers/tendanceController.php');
} elseif($_GET['action'] == "hashtag"){
  require('Controllers/HashtagController.php');
} elseif($_GET['action'] == 'message') {
  require('Controllers/messageController.php');
}

require('../twitter/views/footer.php');
