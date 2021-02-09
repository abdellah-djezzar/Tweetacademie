<?php
require ('Model/member.php');
require ('Repository/UsersData.php');

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}
var_dump($_SESSION['id']);
$usersData = new UsersData;
$getUser = $usersData->getUserById($_SESSION["id"]);

echo $getUser[0]["id_user"];

$UserModel = new Member;
$UserModel->hydrategetUser([0]["id_user"]);

var_dump($UserModel);




include('views/home/home.php');