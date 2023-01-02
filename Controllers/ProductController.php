<?php

class ProductController extends BaseController
{
  public function create(Product $product)
  {
    $req = $this->pdo->prepare('INSERT INTO `product` (name, price) VALUES (:name, :price)');
    $req->bindValue('name', $product->getName(), PDO::PARAM_STR);
    $req->bindValue('price', $product->getPrice(), PDO::PARAM_STR);
    $req->execute();
  }

  public function update(Product $product)
  {
    $req = $this->pdo->prepare("UPDATE `product` SET name = :name, price = :price WHERE id = :id");
    $req->bindValue('name', $product->getName(), PDO::PARAM_STR);
    $req->bindValue('price', $product->getPrice(), PDO::PARAM_STR);
    $req->bindValue('id', $product->getId(), PDO::PARAM_INT);
    $req->execute();
  }

  public function delete(int $id)
  {
    $req = $this->pdo->prepare("DELETE FROM `product` WHERE id = :id");
    $req->bindValue('id', $id, PDO::PARAM_INT);
    $req->execute();
  }

  public function getById(int $id)
  {
    $req = $this->pdo->query("SELECT * FROM `product` WHERE id = $id");
    $data = $req->fetch();

    return new Product($data);
  }

  public function getAll()
  {
    $req = $this->pdo->query("SELECT * FROM `product` ORDER BY id DESC");
    $products = [];
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
      $products[] = new Product($data);
    }

    return $products;
  }
}
