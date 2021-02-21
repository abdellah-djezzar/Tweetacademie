<?php
require('Repository/MessagesRepository.php');
require('Repository/TweetsRepository.php');
require('Repository/UserDataRepository.php');
require('Model/member.php');

$messagesRepository = new MessagesRepository;
$tweetsRepository = new TweetsRepository;
$userDataRepository = new UserDataRepository;
$member = new Member;


$getUserId = $userDataRepository->getUserById($_SESSION['id']);
