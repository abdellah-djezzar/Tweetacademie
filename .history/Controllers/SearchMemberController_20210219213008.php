<?php 
echo "<br>";
echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";


require('Repository/UserDataRepository.php');
$userDataRepository = new UserDataRepository;
$getMembers = $userDataRepository->getAllUser($_POST['test']);
if(empty($getMembers)) { //
  echo "ok";
} else {
  echo json_encode("reponse ok");
}

include('views/messages/messagerie.php');
