<?php 
require ('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;

$UserDataRepository->darkTheme($_SESSION['id']);
