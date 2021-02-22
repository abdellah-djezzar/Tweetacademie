<?php 
require('Repository/UserDataRepository.php');
$userDataRepository = new UserDataRepository;
$getMembers = $userDataRepository->getAllUser($_SESSION['id']);

if(empty($getMembers))