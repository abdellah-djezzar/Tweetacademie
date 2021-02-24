<?php 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

// avoir le dark theme
$UserDataRepository->darkTheme($_SESSION['id']);

// avoir le theme par defaut

include('views/theme.php');

