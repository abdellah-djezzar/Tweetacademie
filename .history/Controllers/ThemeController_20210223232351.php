<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$checkTheme = $UserDataRepository->checkTheme($_SESSION['id']);
theme=darkTheme
if(isset($_GET['theme']) and ($_GET['theme'] == "DarkTheme")) {
  $UserDataRepository->darkTheme($_SESSION['id']);
 }

include('views/theme.php');

