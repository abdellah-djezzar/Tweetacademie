<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$checkTheme = $UserDataRepository->checkTheme($_SESSION['id']);

if(isset($_GET['darkTheme'])) {
  $test = $UserDataRepository->darkTheme($_SESSION['id']);
  var_dump($test);
 }

include('views/theme.php');

