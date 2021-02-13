<?php
require ('Model/member.php');
require ('Repository/UsersDataRepository.php');
if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
} 
$UsersDataRepository = new UsersData;
$getUser = $UsersDataRepository->getUserById($_SESSION["id"]);
$userModel = new Member;
$userModel->hydrate($getUser[0]);
include('views/profil/profil.php');