<?php
class OrderController extends BaseController
{
  public function create(Order $order)
  {
    $req = $this->pdo->prepare('INSERT INTO `order` (firstname, lastname, email, address, postcode, city, phone) VALUES (:firstname, :lastname, :email, :address, :postcode, :city, :phone)');
    $req->bindValue('firstname', $order->getFirstname(), PDO::PARAM_STR);
    $req->bindValue('lastname', $order->getLastname(), PDO::PARAM_STR);
    $req->bindValue('email', $order->getEmail(), PDO::PARAM_STR);
    $req->bindValue('address', $order->getAddress(), PDO::PARAM_STR);
    $req->bindValue('postcode', $order->getPostcode(), PDO::PARAM_STR);
    $req->bindValue('city', $order->getCity(), PDO::PARAM_STR);
    $req->bindValue('phone', $order->getPhone(), PDO::PARAM_INT);
    $req->execute();
  }

  public function update(order $order)
  {
    $req = $this->pdo->prepare("UPDATE `order` SET firstname = :firstname, lastname = :lastnaùe, email = :email, address = :address, postcode = :postcode, city = :city, phone = :phone WHERE id = :id");
    $req->bindValue('id', $order->getId(), PDO::PARAM_INT);
    $req->bindValue('firstname', $order->getFirstname(), PDO::PARAM_STR);
    $req->bindValue('lastname', $order->getLastname(), PDO::PARAM_STR);
    $req->bindValue('email', $order->getEmail(), PDO::PARAM_STR);
    $req->bindValue('address', $order->getAddress(), PDO::PARAM_STR);
    $req->bindValue('postcode', $order->getPostcode(), PDO::PARAM_STR);
    $req->bindValue('city', $order->getCity(), PDO::PARAM_STR);
    $req->bindValue('phone', $order->getPhone(), PDO::PARAM_INT);
    $req->execute();
  }

  public function delete(int $id)
  {
    $req = $this->pdo->prepare("DELETE FROM `order` WHERE id = :id");
    $req->bindValue('id', $id, PDO::PARAM_INT);
    $req->execute();
  }

  public function getById(int $id)
  {
    $req = $this->pdo->query("SELECT * FROM `order` WHERE id = $id");
    $data = $req->fetch();

    return new order($data);
  }

  public function getAll()
  {
    $req = $this->pdo->query("SELECT * FROM `order` ORDER BY id");
    $orders = [];
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
      $orders[] = new order($data);
    }

    return $orders;
  }
}
