<?php
require ('Repository/UsersData.php');
require ('Model/member.php');
$usersData = new UsersData;

if (isset($_SESSION['id']))
{
    header('Location: index.php?action=home');
}

    include ('views/security/register.php');
    if (isset($_POST["register"])){
        $HashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $usersData->newUser($_POST['name'], $_POST['firstname'], $_POST['username'], $_POST['dob'], $_POST['email'], $HashedPassword);
        var_dump($usersData);
        $usersData->sessionStart();
        header('Location: index.php?action=home');
    }

    if (isset($_POST["login"])){
        
        $getUserInfos = $usersData->getAllFromUserByEmail($_POST['emailLogin']); 
        $checkPassword = $getUserInfos["password"];
        $userId = $getUserInfos["id"];
        if(password_verify($_POST['passwordLogin'], $checkPassword)){

            $usersData->userLogin($_POST['emailLogin'], $_POST['passwordLogin']);
            $usersData->sessionStartLogIn($userId);
            header('Location: index.php?action=home');
        }
    }