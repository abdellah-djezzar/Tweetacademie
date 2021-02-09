<?php
require ('Repository/UsersData.php');
require ('../Model/member.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

$usersData = new UsersData;
$getUser = $usersData->getUserById($_SESSION['id']);
var_dump($getUser);

$UserModel = new Member($getUser);
var_dump($UserModel);



include('views/home/home.php');