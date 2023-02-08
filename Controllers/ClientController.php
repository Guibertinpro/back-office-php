<?php
class ClientController extends BaseController
{
  public function create(Client $client)
  {
    $req = $this->pdo->prepare('INSERT INTO `client` (firstname, lastname, email, address, postcode, city, phone) VALUES (:firstname, :lastname, :email, :address, :postcode, :city, :phone)');
    $req->bindValue('firstname', $client->getFirstname(), PDO::PARAM_STR);
    $req->bindValue('lastname', $client->getLastname(), PDO::PARAM_STR);
    $req->bindValue('email', $client->getEmail(), PDO::PARAM_STR);
    $req->bindValue('address', $client->getAddress(), PDO::PARAM_STR);
    $req->bindValue('postcode', $client->getPostcode(), PDO::PARAM_STR);
    $req->bindValue('city', $client->getCity(), PDO::PARAM_STR);
    $req->bindValue('phone', $client->getPhone(), PDO::PARAM_INT);
    $req->execute();
  }

  public function update(Client $client)
  {
    $req = $this->pdo->prepare("UPDATE `client` SET firstname = :firstname, lastname = :lastname, email = :email, address = :address, postcode = :postcode, city = :city, phone = :phone WHERE id = :id");
    $req->bindValue('id', $client->getId(), PDO::PARAM_INT);
    $req->bindValue('firstname', $client->getFirstname(), PDO::PARAM_STR);
    $req->bindValue('lastname', $client->getLastname(), PDO::PARAM_STR);
    $req->bindValue('email', $client->getEmail(), PDO::PARAM_STR);
    $req->bindValue('address', $client->getAddress(), PDO::PARAM_STR);
    $req->bindValue('postcode', $client->getPostcode(), PDO::PARAM_STR);
    $req->bindValue('city', $client->getCity(), PDO::PARAM_STR);
    $req->bindValue('phone', $client->getPhone(), PDO::PARAM_INT);
    $req->execute();
  }

  public function delete(int $id)
  {
    $req = $this->pdo->prepare("DELETE FROM `client` WHERE id = :id");
    $req->bindValue('id', $id, PDO::PARAM_INT);
    $req->execute();
  }

  public function getById(int $id)
  {
    $req = $this->pdo->query("SELECT * FROM `client` WHERE id = $id");
    $data = $req->fetch();

    return new Client($data);
  }

  public function getAll()
  {
    $req = $this->pdo->query("SELECT * FROM `client` ORDER BY id");
    $clients = [];
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
      $clients[] = new Client($data);
    }

    return $clients;
  }  

  public function getTotalNbClients()
  {
    $req = $this->pdo->query("SELECT count(*) FROM `client`");
    $data = $req->fetch();

    return $data;
  }

}
