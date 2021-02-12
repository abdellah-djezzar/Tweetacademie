<?php
require ('Model/member.php');
require ('Repository/UsersData.php');
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
} 
$usersData = new UsersData;
$getUser = $usersData->getUserById($_SESSION["id"]);
$userModel = new Member;
$userModel->hydrate($getUser[0]);
include('views/profil/profil.php');