<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$darkTheme = $UserDataRepository->darkTheme($_SESSION['id']);
var_dump($darkTheme)
