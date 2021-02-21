<?php
require('Repository/MessagesRepository.php');
require('Repository/TweetsRepository.php');
require('Repository/UserDataRepository.php');
require('Model/member.php');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";


$messagesRepository = new MessagesRepository;
$userDataRepository = new UserDataRepository;
$getUserId = $userDataRepository->getUserById($_SESSION['id']);
//$member = new Member($getUserId);

//var_dump($member);
