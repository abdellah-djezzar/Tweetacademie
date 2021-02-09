<?php
require ('Model/member.php');
require ('Repository/UsersData.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}
// ici on utilise la class usersData (là ou on fait les requettes concernants LES utilisateurs. donc ceux inscrits ou non)
$usersData = new UsersData;
// ensuite on utilise la méthode "getuserbyid". Celle ci est spécifique (voir usersdata.php)
$getUser = $usersData->getUserById($_SESSION["id"]);

$UserModel = new Member;
$UserModel->hydrate($getUser[0]);

include('views/home/home.php');