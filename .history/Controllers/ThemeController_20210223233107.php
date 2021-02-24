<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$checkTheme = $UserDataRepository->checkTheme($_SESSION['id']);

var_dump($checkTheme);
if(isset($_GET['darkTheme'])) {
  $UserDataRepository->darkTheme($_SESSION['id']);
 }

include('views/theme.php');

