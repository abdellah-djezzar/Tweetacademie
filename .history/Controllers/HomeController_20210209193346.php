<?php
require ('Repository/UsersData.php');
if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

$usersData = new UsersData;
$getUserId = $usersData->getUserById($_SESSION['id']);

var_dump($getUserId);


include('views/home/home.php');