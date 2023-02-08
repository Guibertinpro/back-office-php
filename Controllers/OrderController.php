<?php
class OrderController extends BaseController
{
  public function create(Order $order)
  {
    $req = $this->pdo->prepare('INSERT INTO `order` (amount, client_id) VALUES (:amount, :client_id)');
    $req->bindValue('amount', $order->getAmount(), PDO::PARAM_STR);
    $req->bindValue('client_id', $order->getClient_id(), PDO::PARAM_STR);
    $req->execute();
  }

  public function update(order $order)
  {
    $req = $this->pdo->prepare("UPDATE `order` SET amount = :amount, client_id = :client_id WHERE id = :id");
    $req->bindValue('amount', $order->getAmount(), PDO::PARAM_STR);
    $req->bindValue('client_id', $order->getClient_id(), PDO::PARAM_STR);
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

  public function getNumberOfOrdersByClientId(int $id)
  {
    $req = $this->pdo->query("SELECT count(*) FROM `order` WHERE client_id = $id");
    $req->bindValue('id', $id, PDO::PARAM_INT);
    $data = $req->fetch();

    return $data;
  }

  public function getTotalSpentByClientId(int $id)
  {
    $req = $this->pdo->query("SELECT sum(amount) FROM `order` WHERE client_id = $id");
    $req->bindValue('id', $id, PDO::PARAM_INT);
    $data = $req->fetch();

    return $data;
  }

  public function getTotalNbOrders()
  {
    $req = $this->pdo->query("SELECT count(*) FROM `order`");
    $data = $req->fetch();

    return $data;
  }

  public function getTotalOrders()
  {
    $req = $this->pdo->query("SELECT sum(amount) FROM `order`");
    $data = $req->fetch();

    return $data;
  }
}
