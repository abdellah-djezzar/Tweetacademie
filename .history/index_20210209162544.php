<?php 
// ici c'est la page index. C'est là ou l'utilisateur arrive. selon les lien qu'il va cliquer on va le renvoyer vers telles ou telles vues. regardez bien à quoi ressemblent les url pour comprendre d'ou vient le "action". 

// comme les sessions sont les premieres choses à appeler en php si on souhaite les utiliser, alors on met un session_start à l'index, ce qui permet plutard de pouvoir y insérer des données. En gros ça veut dire "tiens php, ici je veux pouvoir éventuellement créer une session". et plutard dans les controller va soit en créer une pour le "login" via une methode, ou soit en detruire une avec "session_destroy" pour le logout.
session_start();
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
} elseif($_GET['action'] == "email"){
  require('Controllers/ValidationController.php');
}