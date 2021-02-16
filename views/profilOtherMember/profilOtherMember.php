<?php 
// Ici la page membre. On accède aux informations du membre comme ceci:
echo "<br>";
echo "<br>";
echo "<br>";
echo $member->getFirstname();
echo "<br>";
echo $member->getLastname();
echo "<br>";
echo $member->getUsername();
echo "<br>";
echo $member->getEmail();
echo "<br>";
echo $member->getDob();
echo "<br>";
echo "Nombre de tweets de l'utilisateur: " . $countTweet["tweets"] . "";


