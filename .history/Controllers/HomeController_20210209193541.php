<?php
require ('Repository/UsersData.php');
require ('Model/member.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

$usersData = new UsersData;
$getUser = $usersData->getUserById($_SESSION['id']);

$UserModel = new UserModel;

var_dump($getUser);


include('views/home/home.php');