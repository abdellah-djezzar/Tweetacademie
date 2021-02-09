<?php 

class Member 
{
  private $nom_user;
  private $prenom_user;
  private $password;
  private $email;


  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value) {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set' . ucfirst($key);

      // Si le setter correspondant existe.
      if (method_exists($this, $method)) {
          // On appelle le setter.
          $this->$method($value);
      }
  }
  }

}