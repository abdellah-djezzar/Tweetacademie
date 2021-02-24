<?php 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$check = $UserDataRepository->checkTheme($_SESSION['id']);
var_dump($_SESSION['theme']);
var_dump($_SESSION['id']);
