 <?php 
require('Repository/UserDataRepository.php');
$UserDataRepository = new UserDataRepository;
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
if(isset($_GET['pseudo'])){
  $members = $UserDataRepository->getAllUser($_GET['pseudo']);
}
include('views/searchMember/searchMember.php');