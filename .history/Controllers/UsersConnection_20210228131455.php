<?php
require ('Repository/UserDataRepository.php');
require ('Model/member.php');
$UserDataRepository = new UserDataRepository;
$ValidationRepository = new ValidationRepository;

$checkEmail = $ValidationRepository->checkEmail($_POST["email"]);

if (isset($_SESSION['id']))
{
    header('Location: index.php');
}

    include ('views/security/register.php');
    if (isset($_POST["register"])){

        if(
            !empty($_POST["name"]) && preg_match("/[a-zA-Z]*/", $_POST["name"]) &&
            !empty($_POST["firstname"]) && preg_match("/[a-zA-Z]*/", $_POST["firstname"]) &&
            !empty($_POST["username"]) && preg_match("/[a-zA-Z]*/", $_POST["username"]) &&
            !empty($_POST["pseudo"]) && preg_match("/[a-zA-Z]*/", $_POST["pseudo"]) &&
            !empty($_POST["dob"]) && 
            !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) &&
            !empty($_POST["password"]) && preg_match("/[a-zA-Z]*/", $_POST["password"])){ 

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
        } else {
            die("l'un des champs a été incorrectement renseigné et/ou le pseudo ou username ou email est déjà pris");
        }    
    }
    