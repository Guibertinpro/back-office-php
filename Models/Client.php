<?php

class Client extends EntityBase
{
  private ?string $firstname;
  private ?string $lastname;
  private ?string $email;
  private ?string $address;
  private ?string $postcode;
  private ?string $city;
  private ?int $phone;

  /**
   * Get the value of address
   */ 
  public function getAddress():string
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */ 
  public function setAddress(?string $address)
  {
    $this->address = $address;

    return $this;
  }

  /**
   * Get the value of postcode
   */ 
  public function getPostcode():string
  {
    return $this->postcode;
  }

  /**
   * Set the value of postcode
   *
   * @return  self
   */ 
  public function setPostcode(?string $postcode)
  {
    $this->postcode = $postcode;

    return $this;
  }

  /**
   * Get the value of phone
   */ 
  public function getPhone():int
  {
    return $this->phone;
  }

  /**
   * Set the value of phone
   *
   * @return  self
   */ 
  public function setPhone(?int $phone)
  {
    $this->phone = $phone;

    return $this;
  }

  /**
   * Get the value of city
   */ 
  public function getCity():string
  {
    return $this->city;
  }

  /**
   * Set the value of city
   *
   * @return  self
   */ 
  public function setCity(?string $city)
  {
    $this->city = $city;

    return $this;
  }

  /**
   * Get the value of firstname
   */ 
  public function getFirstname():string
  {
    return $this->firstname;
  }

  /**
   * Set the value of firstname
   *
   * @return  self
   */ 
  public function setFirstname(?string $firstname)
  {
    $this->firstname = $firstname;

    return $this;
  }

  /**
   * Get the value of lastname
   */ 
  public function getLastname():string
  {
    return $this->lastname;
  }

  /**
   * Set the value of lastname
   *
   * @return  self
   */ 
  public function setLastname(?string $lastname)
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail():string
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail(?string $email)
  {
    $this->email = $email;

    return $this;
  }
}
