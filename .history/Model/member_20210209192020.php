<?php 

class Member 
{
  private string $name;
  private string $firstName;
  private string $lastName;
  private string $email;


  public function __construct($data)
  {
    foreach ($data as $key => $value) {
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set' . ucfirst($key);

        // Si le setter correspondant existe.
        if (method_exists($this, $method)) {
        // On appelle le setter.
          $this->$method($value);
        }
    }

  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getFirstName(): string
  {
    return $this->firstName;
  }

  public function setFirstName(string $firstName): self
  {
    $this->firstName = $firstName;

    return $this;
  }
 
  public function getLastName() : string
  {
    return $this->lastName;
  }

  public function setLastName(string $lastName): self
  {
    $this->lastName = $lastName;

    return $this;
  }

  public function getEmail() : string
  {
    return $this->email;
  }

  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }
}