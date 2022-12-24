<?php

class BaseController
{
  // Attributs
  protected $pdo;

  // Méhtodes
  public function __construct() {
    $host = "localhost";
    $dbName = "backoffice-php";
    $dbUsername = "root";
    $dbPassword = "root";
    $this->setPdo(new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword));
  }

  public function getPdo()
  {
    return $this->pdo;
  }

  public function setPdo($pdo)
  {
    $this->pdo = $pdo;
    return $this;
  }
}
