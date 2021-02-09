<?php

require ('Repository/UsersData.php');
$usersData = new UsersData;

if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}

include('views/home/home.php');