<?php
require ('Model/member.php');
require ('Repository/UserDataRepository.php');
require ('Repository/TweetsRepository.php');
require ('Repository/MessagesRepository.php');
$UserDataRepository = new UserDataRepository;
$TweetRepository = new TweetsRepository;
$MessagesRepository = new MessagesRepository;
