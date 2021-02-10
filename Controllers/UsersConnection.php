<?php
require ('Repository/UsersData.php');
require ('Model/member.php');
$usersData = new UsersData;

// si il a une session on redirige vers la page "home" (la page d'acceuil avec son profil etc) directement
if (isset($_SESSION['id']))
{
    header('Location: index.php?action=home');
}

// ici un else est possible, mais ça devient vite un "gros bout de code" illisible, donc 2 if sont plus appropriés.
// si l'utilisateur n'a pas de session, alors on propose le formulaire d'inscription en incluant la vue "register.php",
// puis si il a bien rempli le formulaire et qu'aucun champ n'est vide alors on appel "newUser" (qui est une méthode dans le controller) qui va s'occuper d'insérer les données.
if (!isset($_SESSION['id']))
{
    include ('views/security/register.php');
    // varifier si formulaire post avec l'input hidden "register" existe (une fois appyé sur valider). si oui on prend les 
    // info dedans et on hash le mot de passe + création d'un utilisateur
    if (isset($_POST["register"])){
        $HashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $usersData->newUser($_POST['name'], $_POST['firstname'], $HashedPassword, $_POST['email']);
        // quand les données ont été inséré on appel une autre méthode du controller qui va s'occuper d'aller chercher l'identifiant de l'utilisateur et l'associer à la $_session['id'] (voir la méthode dans le controller "userdata.php")

        $usersData->sessionStart();  
        header('Location: index.php?action=home');
    }

    if (isset($_POST["login"])){
        
        //obtenir toutes les informations d'un utilisateur à partir de son mail car le mail sera forcément unique en bdd.
        $getUserInfos = $usersData->getAllFromUserByEmail($_POST['emailLogin']); 
        var_dump($getUserInfos);
        $checkPassword = $getUserInfos[0]["password"];
        var_dump($checkPassword);
        if(password_verify($_POST['passwordLogin'], $checkPassword)){

            //methode pour login l'utilisateur
            $usersData->userLogin($_POST['emailLogin'], $_POST['passwordLogin']);
            // à partir des infos obtenues au dessus on prend l'id utilisateur et on lui crée sa session ([0]["id_user"]) = parce que c'est un tableau associatif donc faut aller chercher l'info exact en parcourant le tableau.
            $usersData->sessionStartLogIn($getUserInfos[0]["id_user"]);
            header('Location: index.php?action=home');
        }
    }
}

// if (isset($_POST) && !empty($_POST)) {
//     $user = $userRepository->UserLogin($_POST['email']);
//     $hash = $user[0]['password'];
//     if (password_verify($_POST['password'], $hash)) {
//       $userRepository->sessionStartLogIn($user[0]['id']);
//       header('Location: http://soutenance-epitech.test/my_meetic/index.php?action=home');
//     } else {
//       echo "identifiants incorrect";
//     }
//   }