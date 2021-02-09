<?php 

class Member 
{
  private string $name;
  private string $firstName;
  private string $lastName;
  private string $email;

  public function hydrate()
  {

  }

  public function getName()
  {
    return $this->name;
  }

  public function setName(string $name) : self
  {
    $this->name = $name;

    return $this;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName(string $firstName) : self
  {
    $this->firstName = $firstName;

    return $this;
  }
 
  public function getLastName()
  {
    return $this->lastName;
  }

  public function setLastName(string $lastName) : self
  {
    $this->lastName = $lastName;

    return $this;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail(string $email) : self
  {
    $this->email = $email;

    return $this;
  }
}