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
echo "ok";
//$member = new Member($getUserId);
include('views/profil/messages.php');
require('../twitter/views/footer.php');


//var_dump($member);
