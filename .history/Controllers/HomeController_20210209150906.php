<?php

require ('Repository/UsersData.php');
$usersData = new UsersData;

if(!isset($_SESSION['id'])){
  header('Location: twitter/index.php?action=');
}

include('views/home/home.php');