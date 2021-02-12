<?php 
session_start();

  if(!empty($_GET['action']) && $_GET['action'] == "validation"){
    require('Controllers/ValidationController.php');
    exit;
}


require('../twitter/views/header.php');
if (empty($_GET['action'])) {
  require('Controllers/UsersConnection.php');
} elseif($_GET['action'] == "login"){
  require('Controllers/UsersConnection.php');
} elseif($_GET['action'] == "register"){
  require('Controllers/UsersConnection.php');
} elseif($_GET['action'] == "home"){
  require('Controllers/HomeController.php');
} elseif($_GET['action'] == "logout"){
  require('Controllers/LogoutController.php');
}
require('../twitter/views/footer.php');
