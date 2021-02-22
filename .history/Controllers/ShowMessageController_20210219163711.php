<?php 
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
require ('Repository/MessagesRepository.php');
$userDataRepository = new UserDataRepository();
$MessageRepository = new MessagesRepository();
