<?php
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
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
var_dump($getUserId);
include('views/messages/messages.php');
require('../twitter/views/footer.php');


//var_dump($member);
