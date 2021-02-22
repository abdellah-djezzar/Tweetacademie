<?php
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
require ('Repository/MessagesRepository.php');
$userDataRepository = new UserDataRepository();
require('../twitter/views/header.php');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$getUserId = $userDataRepository->getUserById($_SESSION['id']);
$getMembersList = $userDataRepository->getAllUser();
var_dump($getMembersList);
include('views/messages/messages.php');
require('../twitter/views/footer.php');


//var_dump($member);
