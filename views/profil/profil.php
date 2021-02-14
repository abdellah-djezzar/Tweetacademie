<?php 
// Ici la page membre. On accède aux informations du membre comme ceci:
echo "<br>";
echo "<br>";
echo "<br>";
echo $userModel->getFirstname();
echo "<br>";
echo $userModel->getLastname();
echo "<br>";
echo $userModel->getUsername();
echo "<br>";
echo $userModel->getEmail();
echo "<br>";
echo $userModel->getDob();
echo "<br>";
echo "Nombre de tweets de l'utilisateur: " . $countTweet["tweets"] . "";