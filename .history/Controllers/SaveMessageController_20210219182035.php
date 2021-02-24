<?php
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
require ('Repository/MessagesRepository.php');
$userDataRepository = new UserDataRepository();
$messagesRepository = new MessagesRepository();
require('../twitter/views/header.php');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$getUserId = $userDataRepository->getUserById($_SESSION['id']);
include('views/messages/messages.php');
require('../twitter/views/footer.php');


//var_dump($member);
