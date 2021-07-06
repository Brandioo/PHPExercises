<?php


class Orders{
    public $orderId;
    public Product $product;
    public $qty;
    public $date;
    public Client $client;
    public ShippingMethod $shippingMethod;

    public function __construct($orderId, $qty, $date){
        $this->orderId = $orderId;
        $this->qty = $qty;
        $this->date = $date;
    }

    public function setProduct(Product $product){
        $this->product = $product;
    }

    public function setClient(Client $client){
        $this->client = $client;
    }

    public function setShippingMethod(ShippingMethod $shippingMethod){
        $this->shippingMethod = $shippingMethod;
    }
}