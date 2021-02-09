<?php
require ('Model/member.php');
require ('Repository/UsersData.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}
var_dump($_SESSION['id']);
$usersData = new UsersData;
$getUser = $usersData->getUserById($_SESSION["id"]);

echo $getUser[0][1]["user_id"];

$UserModel = new Member;
$UserModel->hydrate($getUser);

var_dump($UserModel);




include('views/home/home.php');