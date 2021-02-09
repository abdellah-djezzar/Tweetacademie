<?php 

class Member 
{
  private $nom_user;
  private $prenom_user;
  private $password;
  private $email;


  public function hydrate(array $donnees): object
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

  public function getNom_user()
  {
    return $this->nom_user;
  }

  public function setNom_user($nom_user)
  {
    $this->nom_user = $nom_user;

    return $this;
  }

  public function getPrenom_user()
  {
    return $this->prenom_user;
  }

  public function setPrenom_user($prenom_user)
  {
    $this->prenom_user = $prenom_user;

    return $this;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }
}