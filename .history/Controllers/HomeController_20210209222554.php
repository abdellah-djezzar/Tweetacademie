<?php
require ('Model/member.php');
require ('Repository/UsersData.php');
//si pas de session, on renvoit vers action="". Comme indiqué dans "index.php" si action est empty alors ça redirige vers le controller "usersConnection" et dans "usersConnection" on lui dit "si t'as pas d'id alors on t'affiche la page des membres non connecté, donc le formulaire avec inscrption/connexion //
if(!isset($_SESSION['id'])){
  header('Location: index.php?action=');
}
// ici on utilise la class usersData (là ou on fait les requettes concernants LES utilisateurs. donc ceux inscrits ou non)
$usersData = new UsersData;
// ensuite on utilise la méthode "getuserbyid" pour avoir l'id du membre). 
$getUser = $usersData->getUserById($_SESSION["id"]);


// ici Un model "member". /!\ Ce n'est pas un model tel qu'on l'entend dans "mvc" (model view controller). Ici le model represente juste quelque chose (ici un membre) et dedans on ne fait rien à part une méthode d'hydratation et des setters et getter. C'est avec ce model qu'on travaillera pour afficher tout ce dont nos vues ont besoin concernant le profil du membre (nom/prenom etc)
$UserModel = new Member;

// getUser[0] = l'id de l'utilisateur récupéré dans l'objet au dessus.
$UserModel->hydrate($getUser[0]);

include('views/home/home.php');