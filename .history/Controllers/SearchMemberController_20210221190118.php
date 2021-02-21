 <?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if(isset($_GET['pseudo'])){
  $getMembers = $UserDataRepository->getAllUser($_GET['pseudo']);
}
include('views/messages/searchMember.php');


// barre de recherche pour rechercher un membre avec qui discuter via l'onglet "messagerie"

// vue liée : views/messages/messageries