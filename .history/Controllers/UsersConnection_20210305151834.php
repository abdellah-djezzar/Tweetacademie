<?php
require ('Repository/UserDataRepository.php');
require ('Repository/ValidationRepository.php');
require ('Model/member.php');
$UserDataRepository = new UserDataRepository;
$ValidationRepository = new ValidationRepository;

if (isset($_SESSION['id']))
{
    header('Location: index.php');
}

    include ('views/security/register.php');
    if (isset($_POST["register"])){

        $checkEmail = $ValidationRepository->checkEmail($_POST["email"]);
        $checkPseudo = $ValidationRepository->checkPseudo($_POST["pseudo"]);
        $checkUsername = $ValidationRepository->checkUsername($_POST["username"]);

        if(
            !empty($_POST["name"]) && preg_match("/[a-zA-Zéàèî]*/", $_POST["name"]) &&
            !empty($_POST["firstname"]) && preg_match("/[a-zA-Zéàèî]*/", $_POST["firstname"]) &&
            !empty($_POST["username"]) && preg_match("/[a-zA-Zéàèî]*/", $_POST["username"]) && ($checkUsername == FALSE) &&
            !empty($_POST["pseudo"]) && preg_match("/[a-zA-Zéàèî]*/", $_POST["pseudo"]) && ($checkPseudo == FALSE) &&
            !empty($_POST["dob"]) && 
            !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && ($checkEmail == FALSE) &&
            !empty($_POST["password"]) && preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d.]{8,}$/", $_POST["password"])){ 


            $HashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $UserDataRepository->newUser(
                strip_tags($_POST['name']), 
                strip_tags($_POST['firstname']), 
                strip_tags($_POST['username']), 
                strip_tags($_POST['pseudo']), 
                strip_tags($_POST['dob']), 
                strip_tags($_POST['email']), 
                $HashedPassword,
                strip_tags($_POST['bio']),
                strip_tags($_POST['city']),
                strip_tags($_POST['link']),
                strip_tags($_POST['deleted']),
            );
            $UserDataRepository->sessionStart();
            header('Location: index.php?action=home');
        } else {
         die("l'un des champs est incorrectement renseigné");
        }    
    }
    