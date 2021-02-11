<?php
require ('Model/member.php');
require ('Repository/UsersData.php');
$usersData = new UsersData;
$getUser = $usersData->getUserById($_SESSION["id"]);

if(empty($_SESSION['id'])){
  header('Location: index.php?action=');
} 

    $UserModel = new Member;
    $UserModel->hydrate($getUser[0]);
    var_dump($getUser);
    
    var_dump($UserModel);
    include('views/home/home.php');
