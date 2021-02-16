<?php 

class Member 
{
  private string $lastname;
  private string $firstname;
  private string $username;
  private string $pseudo;
  private $dob;
  private string $email;
  private string $password;

  public function __construct($donnees)
  {
    foreach ($donnees as $key => $value) {
      $method = 'set' . ucfirst($key);

      if (method_exists($this, $method)) {
          $this->$method($value);
      }
  }
  }

  // public function hydrate(array $donnees)
  // {
  //   foreach ($donnees as $key => $value) {
  //     $method = 'set' . ucfirst($key);

  //     if (method_exists($this, $method)) {
  //         $this->$method($value);
  //     }
  // }
  // }

  public function getLastname() : string
  {
    return $this->lastname;
  }

  public function setLastname(string $lastname) : self
  {
    $this->lastname = $lastname;

    return $this;
  }

  public function getFirstname() : string
  {
    return $this->firstname;
  }

  public function setFirstname(string $firstname) : self
  {
    $this->firstname = $firstname;

    return $this;
  }

  public function getUsername() : string
  {
    return $this->username;
  }

  public function setUsername(string $username) : self
  {
    $this->username = $username;

    return $this;
  }

  public function getPseudo() : string
  {
    return $this->pseudo;
  }

  public function setPseudo(string $pseudo)
  {
    $this->pseudo = $pseudo;

    return $this;
  }

  public function getDob()
  {
    return $this->dob;
  }

  public function setDob($dob) : self
  {
    $this->dob = $dob;

    return $this;
  }
 
  public function getEmail() : string
  {
    return $this->email;
  }

  public function setEmail(string $email) : self 
  {
    $this->email = $email;

    return $this;
  }

  public function getPassword() : string 
  {
    return $this->password;
  }

  public function setPassword(string $password) : self 
  {
    $this->password = $password;

    return $this;
  }
}