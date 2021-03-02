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
            !empty($_POST["name"]) && preg_match("/[a-zA-Z]*/", $_POST["name"]) &&
            !empty($_POST["firstname"]) && preg_match("/[a-zA-Z]*/", $_POST["firstname"]) &&
            !empty($_POST["username"]) && preg_match("/[a-zA-Z]*/", $_POST["username"]) && ($checkUsername == FALSE) &&
            !empty($_POST["pseudo"]) && preg_match("/[a-zA-Z]*/", $_POST["pseudo"]) && ($checkPseudo == FALSE) &&
            !empty($_POST["dob"]) && 
            !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) && ($checkEmail == FALSE) &&
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
            // Renvoie une erreur et arrête le script. Pour raison de sécurité (brutforce) on ne précise jamais l'erreur exacte
           var_dump($_POST);
           var_dump($checkPseudo);
           var_dump($checkEmail);
           var_dump($checkUsername);
        }    
    }
    