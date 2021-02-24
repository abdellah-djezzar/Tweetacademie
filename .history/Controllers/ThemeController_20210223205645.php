<?php 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

// avoir le dark theme
$check = $UserDataRepository->darkTheme($_SESSION['id']);

// avoir le theme par defaut
var_dump($_SESSION['theme']);
var_dump($_SESSION['id']);
