<?php 
echo "<br>";
echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";


require('Repository/UserDataRepository.php');
$userDataRepository = new UserDataRepository;
$getMembers = $userDataRepository->getAllUser($_POST['test']);

include('views/messages/messagerie.php');
