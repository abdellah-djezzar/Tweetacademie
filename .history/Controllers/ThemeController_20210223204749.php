<?php 
echo "<br>";
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$check = $UserDataRepository->checkTheme($_SESSION['id']);
var_dump($check);
