<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$checkTheme = $UserDataRepository->checkTheme($_SESSION['id']);

if($_GET['theme'] == 1) {
  $UserDataRepository->darkTheme($_SESSION['id']);
}

include('views/theme.php');

