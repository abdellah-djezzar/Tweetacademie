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


  /**
   * Get the value of nom_user
   */ 
  public function getNom_user()
  {
    return $this->nom_user;
  }

  /**
   * Set the value of nom_user
   *
   * @return  self
   */ 
  public function setNom_user($nom_user)
  {
    $this->nom_user = $nom_user;

    return $this;
  }

  /**
   * Get the value of prenom_user
   */ 
  public function getPrenom_user()
  {
    return $this->prenom_user;
  }

  /**
   * Set the value of prenom_user
   *
   * @return  self
   */ 
  public function setPrenom_user($prenom_user)
  {
    $this->prenom_user = $prenom_user;

    return $this;
  }

  /**
   * Get the value of password
   */ 
  public function getPassword()
  {
    return $this->password;
  }

  /**
   * Set the value of password
   *
   * @return  self
   */ 
  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }
}