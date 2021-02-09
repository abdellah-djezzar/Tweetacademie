<?php
require ('Model/member.php');
require ('Repository/UsersData.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

$usersData = new UsersData;
$getUser = $usersData->getUserById($_SESSION["id"]);

$UserModel = new Member;
$UserModel->hydrate($getUser[0]);

include('views/home/home.php');