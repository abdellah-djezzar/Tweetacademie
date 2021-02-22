<?php
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
$userDataRepository = new UserDataRepository();

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

//var_dump($member);
