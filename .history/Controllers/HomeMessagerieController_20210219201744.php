<?php 

require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$getUser = $UserDataRepository->getAllUser($_GET['pseudo']);
var_dump($getUser);