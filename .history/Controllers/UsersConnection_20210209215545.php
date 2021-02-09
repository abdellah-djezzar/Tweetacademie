<?php
require ('Repository/UsersData.php');
require ('Model/member.php');
$usersData = new UsersData;
$userModel = new Member;

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
    if (isset($_POST) && !empty($_POST))
    {
        $usersData->newUser($_POST['name'], $_POST['firstname'], $_POST['email'], $_POST['password']);
        // quand les données ont été inséré on appel une autre méthode du controller qui va s'occuper d'aller chercher l'identifiant de l'utilisateur et l'associer à la $_session['id'] (voir la méthode dans le controller "userdata.php")

        $usersData->sessionStart();
        $usersData->getUserByEmail($_POST['email']);        
        header('Location: index.php?action=home');
    }
}