<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
$UserDataRepository->disableAccount($_POST['delete']);
Session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);