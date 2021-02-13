<?php
require ('Repository/UsersDataRepository.php');
require ('Model/member.php');
$UsersDataRepository = new UsersData;

if (isset($_SESSION['id']))
{
    header('Location: index.php');
}

    include ('views/security/register.php');
    if (isset($_POST["register"])){
        $HashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $UsersDataRepository->newUser(
            $_POST['name'], 
            $_POST['firstname'], 
            $_POST['username'], 
            $_POST['pseudo'], 
            $_POST['dob'], 
            $_POST['email'], 
            $HashedPassword
        );
        $UsersDataRepository->sessionStart();
        header('Location: index.php?action=home');
    }