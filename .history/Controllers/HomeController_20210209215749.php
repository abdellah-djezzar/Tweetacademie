<?php
require ('Model/member.php');
require ('Repository/UsersData.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}
var_dump($_SESSION['id']);
$usersData = new UsersData;
$getUser = $usersData->getUserById("3");

echo gettype($getUser);

$UserModel = new Member;
$UserModel->hydrate($getUser);

var_dump($UserModel);




include('views/home/home.php');