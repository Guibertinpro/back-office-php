<?php

class EntityBase
{
  // Attributs
  protected int $id;

  // Méthodes
  public function __construct(array $data) {
    $this->hydrate($data);
  }

  public function hydrate(array $data): void
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }
}
