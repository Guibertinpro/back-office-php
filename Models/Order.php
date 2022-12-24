<?php

class Order extends EntityBase
{
  private float $amount;
  private array $products;
  private int $client_id;

  /**
   * Get the value of amount
   */ 
  public function getAmount()
  {
    return $this->amount;
  }

  /**
   * Set the value of amount
   *
   * @return  self
   */ 
  public function setAmount($amount)
  {
    $this->amount = $amount;

    return $this;
  }

  /**
   * Get the value of products
   */ 
  public function getProducts()
  {
    return $this->products;
  }

  /**
   * Set the value of products
   *
   * @return  self
   */ 
  public function setProducts($products)
  {
    $this->products = $products;

    return $this;
  }

  /**
   * Get the value of client_id
   */ 
  public function getClient_id()
  {
    return $this->client_id;
  }

  /**
   * Set the value of client_id
   *
   * @return  self
   */ 
  public function setClient_id($client_id)
  {
    $this->client_id = $client_id;

    return $this;
  }
}
