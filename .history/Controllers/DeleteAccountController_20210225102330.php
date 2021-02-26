<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository->disableAccount($_POST['delete']);
Session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);
var_dump($_POST['delete']);