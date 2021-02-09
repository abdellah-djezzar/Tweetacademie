<?php
require ('Repository/UsersData.php');
require ('Model/member.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

$usersData = new UsersData;
$getUser = $usersData->getUserById(1);
var_dump($getUser);

$UserModel = new Member();
$UserModel->hydrate($getUser);

var_dump($UserModel);



include('views/home/home.php');