<?php
require ('Repository/UsersData.php');
require ('Model/member.php');
$usersData = new UsersData;

if (isset($_SESSION['id']))
{
    header('Location: index.php');
}

    include ('views/security/register.php');
    if (isset($_POST["register"])){
        $HashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $usersData->newUser($_POST['name'], $_POST['firstname'], $_POST['username'], $_POST['pseudo'], $_POST['dob'], $_POST['email'], $HashedPassword);
        $usersData->sessionStart();
        header('Location: index.php?action=home');
    }