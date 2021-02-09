<?php
  require ('Repository/UsersData.php');
if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

$usersData = new UsersData;
$getUser = $userData->getUserById($_SESSION['id']);

var_dump($getUser);


include('views/home/home.php');