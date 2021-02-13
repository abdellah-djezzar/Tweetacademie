<?php 
// Ici la page membre. On accède aux informations du membre comme ceci:
echo $userModel->getFirstname();
echo $userModel->getLastname();
echo $userModel->getUsername();
echo $userModel->getEmail();
echo $userModel->getDob();