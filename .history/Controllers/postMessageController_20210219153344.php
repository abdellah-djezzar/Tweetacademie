<?php
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$getUserId = $userDataRepository->getUserById($_SESSION['id']);
//$member = new Member($getUserId);

//var_dump($member);
