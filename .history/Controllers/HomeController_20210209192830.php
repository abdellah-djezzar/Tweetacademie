<?php
if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

require ('Repository/UsersData.php');
$usersData = new UsersData;
$getUser = $userData->getUserById();


include('views/home/home.php');