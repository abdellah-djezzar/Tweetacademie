<?php
require ('Repository/UserDataRepository.php');
require ('Model/member.php');
$UserDataRepository = new UserDataRepository();

if (isset($_SESSION['id']))
{
    header('Location: index.php');
}
    include ('views/security/register.php');
    if (isset($_POST["register"])){
        $HashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $UserDataRepository->newUser(
            $_POST['name'], 
            $_POST['firstname'], 
            $_POST['username'], 
            $_POST['pseudo'], 
            $_POST['dob'], 
            $_POST['email'], 
            $HashedPassword,
            $_POST['bio'],
            $_POST['city'],
            $_POST['link'],
            $_POST['deleted'],
        );
        $UserDataRepository->sessionStart();
        header('Location: index.php?action=home');
    }