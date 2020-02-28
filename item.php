<?php
class Item{
private $name;
private $price
private $image
private $orderCount=0;
//private size;
//private selectSize();

  public function __construct($name, $price, $image){
    $this->name= $name;
    $this->price= $price;
    $this->image= $image;
  }

  public function getName(){
    return this->name;
  }

  public function getPrice(){
    return this->price;
  }

  public function getImage(){
    return this->image;
  }

  public function getOrderCount(){
    return $this->orderCount;
  }

  public function setOrderCount($orderCount){
    $this->ordercount= $orderCount;
  }

  public function getTotalPrice(){
    return $this->getPrice() * $this->orderCount;
  }

}


 ?>
