<?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
include('views/searchMember/searchBar.php');